<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentesController extends Controller
{
    public function index(){
        return view('componentes');
    }
}
