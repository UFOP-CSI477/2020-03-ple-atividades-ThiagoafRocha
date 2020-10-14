<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use App\Models\Materia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AtividadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $atividades = Atividade::get(); 
        return view('pages.atividades.index', ['atividades' => $atividades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.atividades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Atividade::create($request->all());
        return redirect()->route('atividades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function show(Atividade $atividade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function edit(Atividade $atividade)
    {
        return view("pages.atividades.edit", ['atividade' => $atividade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atividade $atividade)
    {
        $atividade->fill($request->all());
        $atividade->save();
        session()->flash('mensagem', '');
        return redirect()->route('atividades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atividade $atividade)
    {
        $atividade->delete();

        return redirect()->route('atividades.index');
    }
}
