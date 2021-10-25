<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller {
    public function index(Request $request) {
        $series = [
            'Ted Lasso',
            'Friends',
            'This is Us'
        ];
        
        $html = "<ul>";
        foreach ($series as $series) {
            $html .= "<li>$series</li>";
        }
        $html .= "</ul>";
    
        return $html;
    }
}