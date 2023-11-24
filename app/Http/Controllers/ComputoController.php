<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputoController extends Controller
{
    public function index(){
        return view('Categorias.computo');
    }
}
