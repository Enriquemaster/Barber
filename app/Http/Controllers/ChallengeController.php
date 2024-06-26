<?php

namespace App\Http\Controllers;

use App\Models\challenge;
use App\Models\Member;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
        $retos = Member::find($id);
            return view('agregarRetos', compact('retos'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(challenge $challenge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, challenge $challenge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(challenge $challenge)
    {
        //
    }
    public function retosClientes()
    {
        $retos = Member::join('challenges', 'challenges.id', '=', 'members.challenge_id')
            ->select('members.*', 'challenges.titulo', 'challenges.descripcion', 'challenges.recompensa', 'challenges.fecha_inicio', 'challenges.fecha_final')
            ->whereNotNull('members.challenge_id')
            ->get();

        return view('retosClientes', compact('retos'));
    }

}
