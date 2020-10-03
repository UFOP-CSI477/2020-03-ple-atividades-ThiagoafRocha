<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Coleta;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agendamentos = Agendamento::get();
        return view('pages.pages-agendamentos.index', ['agendamentos' => $agendamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pessoas = Pessoa::get();
        $coletas = Coleta::get();
        return view('pages.pages-agendamentos.create', ['pessoas' => $pessoas, 'coletas' => $coletas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Agendamento::create($request->all());
        session()->flash('mensagem', 'Agendamento criado com sucesso!');
        return redirect()->route('agendamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function show(Agendamento $agendamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Agendamento $agendamento)
    {
        $pessoas = Pessoa::get();
        $coletas = Coleta::get();
        return view('pages.pages-agendamentos.edit', ['agendamento' => $agendamento, 'pessoas' => $pessoas, 'coletas' => $coletas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agendamento $agendamento)
    {
        $agendamento->fill($request->all());
        $agendamento->save();
        session()->flash('mensagem', 'Agendamento alterado com sucesso!');
        return redirect()->route('agendamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agendamento $agendamento)
    {
        $agendamento->delete();
        session()->flash('mensagem', 'Agendamento excluído com sucesso!');
        return redirect()->route('agendamentos.index');
    }
}
