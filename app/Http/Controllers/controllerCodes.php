<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Codes; 
use Illuminate\Support\Str; // Para usar la clase Str


class controllerCodes extends Controller
{
    public function generarMembresia()
    {
        $randomCode = Str::random(8); 

        $code = Codes::create([
            'code' => $randomCode,
        ]);

        return redirect()->route('accionesMembresias')->with('success', 'Membresía generada: ' . $randomCode);
    }

}
