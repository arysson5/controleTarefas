<?php

namespace App\Http\Controllers;

use App\Models\tarefa;
use Illuminate\Http\Request;

class tarefaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "fodase";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function show(tarefa $tarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function edit(tarefa $tarefa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tarefa $tarefa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(tarefa $tarefa)
    {
        //
    }
}
