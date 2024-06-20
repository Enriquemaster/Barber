<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
class ControllerProduct extends Controller
{
/////////////////////////////////////////////////////////////////
    public function registrarProducto(Request $request)
    {
        try {
            // Verifico si el usuario tiene el permiso 'crear producto'
            if (!Auth::user()->hasPermissionTo('crear producto')) {
                return redirect()->route('dashboard')->with('success', true);
            }

            // Validación de campos
            $request->validate([
                'nombre' => 'required|string|max:255',
                'desarrollador' => 'required|string',
                'descripcion' => 'required|string',
                'consola' => 'required|string',
                'precio' => 'required|numeric',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            //uso un formato para convertir la imagen y subirla a la base de datos llamado Base64
            // Procesar la imagen
            $base64Image = null;
            if ($request->hasFile('foto')) {
                // Obtener la imagen de la solicitud
                $imagen = $request->file('foto');
                if ($imagen->isValid()) {
                    // Convertir la imagen a base64
                    $base64Image = base64_encode(file_get_contents($imagen->getPathname()));
                } else {

                }
            }

            $producto = new Product([
                'nombre' => $request->input('nombre'),
                'desarrollador' => $request->input('desarrollador'),
                'descripcion' => $request->input('descripcion'),
                'consola' => $request->input('consola'),
                'precio' => $request->input('precio'),
                'foto' => $base64Image,
            ]);
            $producto->save();

            //return response()->json(['message' => 'Producto creado con éxito'], 201);
            return redirect()->route('dashboard')->with('success', 'El producto ha guardado correctamente.');
        } catch (\Exception $e) {
            \Log::error('Error al intentar guardar los datos: ' . $e->getMessage());
        }
    }

///////////////////////////////////////////////////////////////////////////////

public function mostrarFormularioActualizar($id)
{
    // Encuentro el producto por su ID
    $producto = Product::findOrFail($id);

    // Devuelve la vista con el formulario y los datos del producto
    return view('actualizarProducto', compact('producto'));
}
/////////////////////////////////////////////////////////

 // Función para procesar la actualización del producto
 public function actualizar(Request $request, $id)
 {

     // Encuentro el producto por su ID
     $producto = Product::findOrFail($id);

     $request->validate([
         'nombre' => 'required',
         'desarrollador' => 'required',
         'descripcion' => 'required',
         'consola' => 'required',
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
         'desarrollador' => $request->desarrollador,
         'descripcion' => $request->descripcion,
         'consola' => $request->consola,
         'precio' => $request->precio,


     ]);


     // Redirijo a alguna página después de la actualización (puedes ajustar esto según tus necesidades)
     return redirect()->route('accionesProductoss')->with('success', 'El producto ha sido actualizado correctamente.');
 }
 //////////////////////////////////////////////////////////////////////////
     //////////////////////////////////////////////////////////////////////////

    // Método para mostrar los productos
    public function acciones()
    {

        $productos = Product::paginate(8);
        return view('accionesProductoss', compact('productos'));
    }

      // Método para mostrar los productos
      public function acciones1()
      {
  
          $productos = Product::paginate(8);
          return view('verProductos', compact('productos'));
      }

    //////////////////////////////////////////////////////////////////////////
    public function eliminarProducto($id)
    {
        try {
            // Encuentra el producto por su ID
            $producto = Product::find($id);

            // Si el producto no existe, redirigir con un mensaje de error
            if (!$producto) {
                return redirect()->route('dashboard')->with('error', 'Producto no encontrado.');
            }

            // Elimina el producto
            $producto->delete();

            // Redirige con un mensaje de éxito
            return redirect()->route('dashboard')->with('success', 'Producto eliminado correctamente.');
        } catch (\Exception $e) {
            Log::error('Error al intentar eliminar el producto: ' . $e->getMessage());
            return redirect()->route('dashboard')->with('error', 'Ocurrió un error al eliminar el producto.');
        }
    }
    ////////////////////////////////////////////////////////////////////////////////
}
