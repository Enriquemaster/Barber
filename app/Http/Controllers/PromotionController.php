<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
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
    public function show(string $id)
    {
        $promotions = Member::find($id);
        return view('agregarPromociones', compact('promotions'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(promotion $promotion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, promotion $promotion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(promotion $promotion)
    {
        //
    }

    public function promocionesClientes()
    {

        $promotions = Member::join('promotions', 'promotions.id', '=', 'members.promotion_id')
            ->select('members.*', 'promotions.titulo', 'promotions.descripcion', 'promotions.fecha_inicio', 'promotions.fecha_final')
            ->whereNotNull('members.promotion_id')
            ->get();

        return view('promocionesClientes', compact('promotions'));
    }
}
