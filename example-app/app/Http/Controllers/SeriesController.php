<?php

namespace App\Http\Controllers;

class SeriesController extends Controller {
    public function index() {
        $series = [
            'Ted Lasso',
            'Friends',
            'This is Us'
        ];
        
        //primeiro parametro é a view e o segundo é o valor passado
        return view('series.index', compact('series')); 
    }

    public function create() {
        return view('series.create');
    }
}