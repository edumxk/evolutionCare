<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormularioStoreRequest;
use Illuminate\Http\Request;
use \App\Models\Formulario;

class FormularioController extends Controller
{
    //crud laravel
    public function index()
    {
        return view('pages.formulario');
    }
    //create
    public function create()
    {
        return view('pages.formulario');
    }
    //store
    public function store(FormularioStoreRequest $request)
    {
        $formulario = new Formulario();

        dd($request->all());
        $formulario->medico = $request->medico;
        $formulario->paciente = $request->paciente;
        $formulario->enfermeiro = $request->enfermeiro;
        $formulario->tecnico = $request->tecnico;
        $formulario->evolucao = $request->evolucao;

        $formulario->save();

        return redirect('/dashboard')->with('status', 'Formulário enviado com sucesso!');
    }
    //show
    public function show($id)
    {
        $formulario = Formulario::find($id);
        return view('pages.formulario', compact('formulario'));
    }
    //edit
    public function edit($id)
    {
        $formulario = Formulario::find($id);
        return view('pages.formulario', compact('formulario'));
    }
    //update
    public function update(Request $request, $id)
    {
        $formulario = Formulario::find($id);
        $formulario->update($request->all());
        return redirect('/dashboard')->with('success', 'Formulário atualizado com sucesso!');
    }
    //destroy
    public function destroy($id)
    {
        $formulario = Formulario::find($id);
        $formulario->delete();
        return redirect('/dashboard')->with('success', 'Formulário deletado com sucesso!');
    }
}
