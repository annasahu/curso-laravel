<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller {
    public function index(Request $request) {
        // buscar no banco de dados
        $series = Serie::query()
            ->orderBy('nome')
            ->get();
        $mensagem = $request->session()->get('mensagem');
        $request->session()->remove('mensagem');
        
        //primeiro parametro é a view e o segundo é o valor passado
        return view('series.index', compact('series', 'mensagem')); 
    }

    public function create() {
        return view('series.create');
    }

    //salvar no banco de dados
    public function store(Request $request) {
        /*
        $nome = $request->nome;
        
        $serie = Serie::create([
            'nome' => $nome
        ]);
        */

        // pegar todos os dados do formulário e adiciona no banco
        $serie = Serie::create($request->all());
        $request->session()
            ->flash(
                'mensagem', "Série {$serie->id} criada com sucesso {$serie->nome}"
            );

        // determina página que será redirecionado
        return redirect()->route('listar_series');
    }

    public function destroy(Request $request) {
        Serie::destroy($request->id);

        $request->session()
            ->flash(
                'mensagem', "Série removida com sucesso"
            );

            return redirect()->route('listar_series');
    }
}