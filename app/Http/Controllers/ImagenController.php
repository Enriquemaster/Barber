<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $reto = Member::findOrFail($id);

        // Asegúrate de que la propiedad 'imagen' esté disponible y sea la correcta
        if ($reto->challenge && $reto->challenge->imagen) {
            $imagePath = storage_path('app/public/' . $reto->challenge->imagen);
            return response()->file($imagePath);
        }

        return response()->json(['error' => 'Imagen no encontrada'], 404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
