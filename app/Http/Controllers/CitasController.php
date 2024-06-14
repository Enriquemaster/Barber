<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CitasController extends Controller
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
    public function detalle(string $user_id)
    {
        try {
        $citas = User::join('user_cita', 'users.id', '=', 'user_cita.user_id')
            ->join('citas', 'citas.id', '=', 'user_cita.cita_id')
            ->select('users.name as Cliente', 'citas.servicio', 'citas.barbero', 'citas.fecha as Fecha Registro')
            ->where('users.id', $user_id)
            ->get();
            return response()->json([
                'success' => true,
                'data' => $citas
            ], 200);
        } catch (\Exception $e) {
            \Log::error('Error al obtener las citas: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error al obtener las citas'
            ], 500);
        } 
    }

    public function listado()
    {
        try {
        $citas = User::join('user_cita', 'users.id', '=', 'user_cita.user_id')
            ->join('citas', 'citas.id', '=', 'user_cita.cita_id')
            ->select('users.name as cliente', 'citas.servicio', 'citas.barbero', 'citas.fecha as fecha_registro')
            ->get();
            return response()->json([
                'success' => true,
                'data' => $citas
            ], 200);
        } catch (\Exception $e) {
            \Log::error('Error al obtener las citas: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error al obtener las citas'
            ], 500);
        } 
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
