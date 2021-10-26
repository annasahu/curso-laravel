<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model {
    public $timestamps = false;
    // define quais campos podem ser adicionados pelo controller
    protected $fillable = ['nome'];
}