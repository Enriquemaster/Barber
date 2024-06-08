<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services; 

class ControllerServices extends Controller
{
     public function registrarServicio(Request $request)
     {
         try {
             // Validación de campos
             $request->validate([
                 'corte' => 'required|string|max:255',
                 'descripccion' => 'required|string',
                 'precio' => 'required|numeric',
                 
             ]);

             $servicio = new Services([
                 'corte' => $request->input('corte'),
                 'descripccion' => $request->input('descripccion'),
                 'precio' => $request->input('precio'),
              
                 
             ]);    
             $servicio->save();
             
             return redirect()->route('accionesServicios')->with('success', true);
         } catch (\Exception $e) {
           
             \Log::error('Error al intentar guardar los datos: ' . $e->getMessage());
             dd($e->getMessage());
         }
     }
 //////////////////////////////////////////////////////////////////////////
 
      public function mostrarFormularioActualizar($id)
     {
         // Encuentra el producto por su ID
         $servicio = Services::findOrFail($id);
 
         // Devuelve la vista con el formulario y los datos del producto
         return view('actualizarServicios', compact('servicio'));
     }
 ////////////////////////////////////////////////////////////////////////

     // Función para procesar la actualización del producto
     public function actualizar(Request $request, $id)
     {
         
         // Encuentra el producto por su ID
         $servicio = Services::findOrFail($id);
 
         // Valida los datos del formulario
         $request->validate([
             'corte' => 'required',
             'descripccion' => 'required',
             'precio' => 'required|numeric',
         ]);
 
         // Actualiza los datos del producto
         $servicio->update([
             'corte' => $request->corte,
             'descripccion' => $request->descripccion,
             'precio' => $request->precio,
 
             
         ]);
       
         // Redirige a alguna página después de la actualización (puedes ajustar esto según tus necesidades)
         return redirect()->route('accionesServicios')->with('success', 'El servicio ha sido actualizado correctamente.');
     }
     ///////////////////////////////////////////////////////////////////////

       // Método para mostrar los productos
       public function acciones()
       {
           $servicios = Services::paginate(8);
           return view('accionesServicios', compact('servicios'));
       }

    ////////////////////////////////////////////////////////////////////
    public function buscarServicios(Request $request)
    {
        $query = Services::query();
    
        if ($request->has('buscar')) {
            $buscar = $request->input('buscar');
            $query->where('corte', 'like', "%$buscar%");
        }
    
        $servicios = $query->paginate(5);
        return view('servicios', compact('servicios'));
    }
       
    ////////////////////////////////////////////////////////////////    
}
