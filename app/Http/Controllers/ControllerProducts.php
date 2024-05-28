<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products; 


class ControllerProducts extends Controller
{
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
            return redirect()->route('dashboard')->with('success', 'Producto creado exitosamente.');
        
          
        } catch (\Exception $e) {
          
            \Log::error('Error al intentar guardar los datos: ' . $e->getMessage());
            dd($e->getMessage());
        }

        
    }

    // Método para mostrar los productos
    public function mostrarProductos()
    {
        $productos = Products::all();
        return view('productos', compact('productos'));
    }
}

    

