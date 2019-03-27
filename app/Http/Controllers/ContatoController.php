<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = Contato::all();

        return view('contatos.index', compact('contatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contatos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'primeiro_nome' => 'required',
            'ultimo_nome' => 'required',
            'email' => 'required'
            ]);

        $contato = new Contato([
            'primeiro_nome' => $request->get('primeiro_nome'),
            'ultimo_nome' => $request->get('ultimo_nome'),
            'email' => $request->get('email'),
            'titulo_trabalho' => $request->get('titulo_trabalho'),
            'cidade' => $request->get('cidade'),
            'pais' => $request->get('pais')
        ]);

        $contato->save();

        return redirect('/contatos')->with('success', 'Contato salvo!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contato = Contato::find($id);

        return view('contatos.edit', compact('contato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'primeiro_nome' => 'required',
            'ultimo_nome' => 'required',
            'email' => 'required'
        ]);

        $contato = Contato::find($id);
        $contato->primeiro_nome = $request->get('primeiro_nome');
        $contato->ultimo_nome = $request->get('ultimo_nome');
        $contato->email = $request->get('email');
        $contato->titulo_trabalho = $request->get('titulo_trabalho');
        $contato->cidade = $request->get('cidade');
        $contato->pais = $request->get('pais');

        $contato->save();

        return redirect('/contatos')->with('success', 'Contato Atualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contato = Contato::find($id);
        $contato->delete();

        return redirect('/contatos')->with('success', 'Contato deletado');
    }
}
