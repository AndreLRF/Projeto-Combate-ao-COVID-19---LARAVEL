<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locais;

class LocaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locais = Locais::all();

        return view('locais.index', compact('locais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('locais.create');
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
            'logradouro'=>'required',
            'bairro'=>'required',
            'regiao'=>'required'
        ]);

        $locais = new Locais([
            'logradouro' => $request->get('logradouro'),
            'numero' => $request->get('numero'),
            'bairro' => $request->get('bairro'),
            'regiao' => $request->get('regiao')
        ]);
        $locais->save();
        return redirect('/locais')->with('success', 'Local salvo!');
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
        $locais = Locais::find($id);
        return view('locais.edit', compact('locais'));
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
            'logradouro'=>'required',
            'bairro'=>'required',
            'regiao'=>'required'
        ]);

        $locais = Locais::find($id);
        $locais->logradouro =  $request->get('logradouro');
        $locais->numero = $request->get('numero');
        $locais->bairro = $request->get('bairro');
        $locais->regiao = $request->get('regiao');
        $locais->save();

        return redirect('/locais')->with('success', 'Local Atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $locais = locais::find($id);
        $locais->delete();

        return redirect('/locais')->with('success', 'Local excluido!');
    }
}
