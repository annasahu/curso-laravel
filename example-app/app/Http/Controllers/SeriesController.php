<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller {
    public function index() {
        // buscar no banco de dados
        $series = Serie::all();
        
        //primeiro parametro é a view e o segundo é o valor passado
        return view('series.index', compact('series')); 
    }

    public function create() {
        return view('series.create');
    }

    //salvar no banco de dados
    public function store(Request $request) {
        $nome = $request->nome;
        /*
        $serie = Serie::create([
            'nome' => $nome
        ]);
        */

        // pegar todos os dados do formulário e adiciona no banco
        $serie = Serie::create($request->all());

        echo "Serie com id {$serie->id} criada: {$serie->nome}";
    }
}