<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;


class ControllerProducts extends Controller
{
   //////////////////////////////////////////////////////////////////////////
    public function registrarProducto(Request $request)
    {
        try {
            // Verificar si el usuario tiene el permiso 'crear producto'
            if (!Auth::user()->hasPermissionTo('crear producto')) {
                return redirect()->route('dashboard')->with('success', true);
            }

            // Validación de campos
            $request->validate([
                'nombre' => 'required|string|max:255',
                'descripccion' => 'required|string',
                'marca' => 'required|string',
                'modelo' => 'required|string',
                'precio' => 'required|numeric',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            // Procesar la imagen
        $base64Image = null;
        if ($request->hasFile('foto')) {
            // Obtener la imagen de la solicitud
            $imagen = $request->file('foto');
            if ($imagen->isValid()) {
                // Convertir la imagen a base64
                $base64Image = base64_encode(file_get_contents($imagen->getPathname()));
            } else {
                return response()->json(['message' => 'Error al cargar la imagen'], 400);
            }
        }

            $producto = new Products([
                'nombre' => $request->input('nombre'),
                'descripccion' => $request->input('descripccion'),
                'marca' => $request->input('marca'),
                'modelo' => $request->input('modelo'),
                'precio' => $request->input('precio'),
                'foto' => $base64Image,
            ]);    
            $producto->save();
            
            return response()->json(['message' => 'Producto creado con éxito'], 201);
        } catch (\Exception $e) {
            \Log::error('Error al intentar guardar los datos: ' . $e->getMessage());
            return response()->json(['message' => 'Error al intentar guardar los datos' ], 500);
        }
    }
//////////////////////////////////////////////////////////////////////////

     public function mostrarFormularioActualizar($id)
    {
        // Encuentra el producto por su ID
        $producto = Products::findOrFail($id);

        // Devuelve la vista con el formulario y los datos del producto
        return view('actualizarProductos', compact('producto'));
    }
//////////////////////////////////////////////////////////////////////////
    // Función para procesar la actualización del producto
    public function actualizar(Request $request, $id)
    {
        
        // Encuentra el producto por su ID
        $producto = Products::findOrFail($id);

        // Valida los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'descripccion' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'precio' => 'required|numeric',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

         // Procesar la imagen si se ha enviado una nueva
    if ($request->hasFile('foto')) {
        $imagen = $request->file('foto');
        if ($imagen->isValid()) {
            // Convertir la imagen a base64
            $base64Image = base64_encode(file_get_contents($imagen->getPathname()));
            // Asignar la nueva imagen al producto
            $producto->foto = $base64Image;
        } else {
            return redirect()->back()->with('error', 'Error al cargar la nueva imagen');
        }
    }

        // Actualiza los datos del producto
        $producto->update([
            'nombre' => $request->nombre,
            'descripccion' => $request->descripccion,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'precio' => $request->precio,

            
        ]);
        
      
        // Redirige a alguna página después de la actualización (puedes ajustar esto según tus necesidades)
        return redirect()->route('accionesProductos')->with('success', 'El producto ha sido actualizado correctamente.');
    }
//////////////////////////////////////////////////////////////////////////

      // Método para mostrar los productos
      public function acciones()
      {
      
          $productos = Products::paginate(8);
          return view('accionesProductos', compact('productos'));
      }

//////////////////////////////////////////////////////////////////////////
public function buscarProductos(Request $request)
{
    $query = Products::query();

    if ($request->has('buscar')) {
        $buscar = $request->input('buscar');
        $query->where('nombre', 'like', "%$buscar%");
    }

    $productos = $query->paginate(9);
    return view('productos', compact('productos'));
}
   
}

 //////////////////////////////////////////////////////////////////////////   

