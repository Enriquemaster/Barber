<?php

namespace App\Http\Controllers;

use App\Models\challenge;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

             $retos = challenge::join('challenges', 'challenges.id', '=', 'members.challenge_id')
                 ->select('members.*', 'challenges.titulo', 'challenges.descripcion', 'challenges.recompensa', 'challenges.fecha_inicio', 'challenges.fecha_final')
//                 ->where('listaxes.teacher_id', $teacher_id)
                 ->whereNotNull('members.challenge_id')
                 ->get();

        return view('dashboard', compact('retos'));
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
    public function show(challenge $challenge)
    {
        //
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
}
