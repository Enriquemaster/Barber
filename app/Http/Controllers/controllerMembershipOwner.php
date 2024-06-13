<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Codes;
use App\Models\membership_owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class controllerMembershipOwner extends Controller
{
    public function verificarMembresia(Request $request)
    {
        // Obtén el código ingresado por el usuario desde el formulario
        $codigoIngresado = $request->input('codigoTarjeta');

        // Busca el código ingresado en la tabla de códigos
        $codigo = Codes::where('code', $codigoIngresado)->first();

        if ($codigo) {
            // Verifica si el código ya está asociado a cualquier usuario
            $asociacionExistente = membership_owner::where('code_id', $codigo->id)->exists();

            if ($asociacionExistente) {
                // Si el código ya está asociado a cualquier usuario, muestra un mensaje de error
                return redirect()->route('falloMembresia')->with('fail', 'Membresía fallo: El código ya está en uso.');
            }

            $user = Auth::user();

              // Verifica si el código ya está asociado al usuario
              $asociacionExistente = membership_owner::where('user_id', $user->id)
              ->where('code_id', $codigo->id)
              ->exists();

                    if ($asociacionExistente) {
                    // Si el código ya está asociado al usuario, muestra un mensaje de error
                    return redirect()->route('falloMembresia')->with('fail', 'Membresía fallo:');
                    }


            // Crea una nueva entrada en la tabla pivote con el user_id y code_id asociados
            membership_owner::create([
                'user_id' => $user->id,
                'code_id' => $codigo->id,
            ]);

            // Elimina el rol "cliente" si el usuario lo tiene
            if ($user->hasRole('Cliente')) {
                $user->removeRole('Cliente');
            }

   // Asigna el rol "premium" al usuario
   $user->assignRole('Cliente-premium');

            // Redirige al usuario a alguna página de éxito o muestra un mensaje
            return redirect()->route('tuMembresia')->with('success', '¡Membresía registrada con éxito!');
        } else {
            // Si el código no existe, muestra un mensaje de error
            return redirect()->route('falloMembresia')->with('fail', 'Membresía fallo:');
        }
    }



    public function obtenerDatosMembresia()
    {
      // Obtiene el usuario autenticado
    $user = Auth::user();

    // Obtiene todos los registros de la tabla pivote para el usuario autenticado
    $memberships = membership_owner::where('user_id', $user->id)->get();

    // Itera sobre cada registro para obtener el nombre de usuario y el código asociado
    $data = [];
    foreach ($memberships as $membership) {
        $code = Codes::find($membership->code_id);

        // Agrega el nombre de usuario y el código a los datos
        $data[] = [
            'nombre_usuario' => $user->name, // Usamos el nombre del usuario autenticado
            'code' => $code->code,
        ];
    }

    return $data;
}



    public function obtenerDatosMembresias()
    {
        // Obtiene todos los registros de la tabla pivote
        $memberships = membership_owner::all();

        $totalClientes = 0;
        $totalClientesPremium = 0;
        // Itera sobre cada registro para obtener el nombre de usuario y el código asociado
        $data1 = [];
        foreach ($memberships as $membership) {
            $user = User::find($membership->user_id);
            $code = Codes::find($membership->code_id);
            $role = $user->roles->pluck('name')->first();

            // Agrega el nombre de usuario y el código a los datos
            $data1[] = [
                'id' => $membership->id,
                'nombre_usuario' => $user->name,
                'code' => $code->code,
                'role' => $role,
            ];
        }

        // Obtener todos los códigos que no están enlazados
        $codigosNoVinculados = Codes::select('code')
            ->whereNotIn('id', function ($query) {
                $query->select('code_id')->from('tb_membership_owner');
            })
            ->get();

        // Obtiene todos los usuarios con el rol 'Cliente'
        $clientes = User::whereHas('roles', function($query) {
            $query->where('name', 'Cliente');
        })->get();

        $premium = User::whereHas('roles', function($query) {
            $query->where('name', 'Cliente-premium');
        })->get();

        // Obtiene todos los usuarios con sus roles y asigna la descripción personalizada
        $clientesConRoles = $clientes->map(function ($cliente) {
            $cliente->role_description = 'Cliente básico'; // Asigna la descripción personalizada
            return $cliente;
        });
        $totalClientes=count($clientes);
        $totalClientesPremium=count($premium);
//        echo"<pre>"; var_dump($totalClientes,$totalClientesPremium); die;
        $totalUsuarios = $totalClientes + $totalClientesPremium;

        $porcentajeClientesPremium = ($totalClientesPremium / $totalUsuarios) * 100;
        $porcentajeClientesBasicos = ($totalClientes / $totalUsuarios) * 100 ;

        return view('accionesMembresias', [
            'data1' => $data1,
            'codigosNoVinculados' => $codigosNoVinculados,
            'clientes' => $clientesConRoles,
             'porcentajeClientesPremium' => $porcentajeClientesPremium,
            'porcentajeClientesBasicos' => $porcentajeClientesBasicos,
            'numeroClienteBasicos'=>$totalClientes,
            'numeroClientesPremium'=>$totalClientesPremium
        ]);
    }




    public function mostrarDatos1()
{
    $data = $this->obtenerDatosMembresia();

    // Pasa los datos a la segunda vista
    return view('registrarMembresia', ['data' => $data]);
}


}
















