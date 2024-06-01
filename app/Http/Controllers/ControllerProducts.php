<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products; 


class ControllerProducts extends Controller
{
   //////////////////////////////////////////////////////////////////////////
    public function registrarProducto(Request $request)
    {
        try {
            // Validación de campos
            $request->validate([
                'nombre' => 'required|string|max:255',
                'descripccion' => 'required|string',
                'marca' => 'required|string',
                'modelo' => 'required|string',
                'precio' => 'required|numeric',
                
            ]);
    // Procesar la imagen
    $nombreImagen = null;

    if ($request->hasFile('foto')) {
        // Obtener la imagen de la solicitud
        $imagen = $request->file('foto');

        // Generar un nombre único para la imagen
        $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();

        // Guardar la imagen en la carpeta de almacenamiento
        $imagen->storeAs('public/Recursos', $nombreImagen);
    }
            $producto = new Products([
                'nombre' => $request->input('nombre'),
                'descripccion' => $request->input('descripccion'),
                'marca' => $request->input('marca'),
                'modelo' => $request->input('modelo'),
                'precio' => $request->input('precio'),
                'foto' => $nombreImagen,
                
            ]);    
            $producto->save();
            
            return redirect()->route('accionesProductos')->with('success', true);
        } catch (\Exception $e) {
          
            \Log::error('Error al intentar guardar los datos: ' . $e->getMessage());
            dd($e->getMessage());
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
        ]);

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

