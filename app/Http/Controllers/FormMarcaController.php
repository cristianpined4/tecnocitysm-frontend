<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormMarcaController extends Controller
{
    public function index(){
        return view('Forms.formMarca');
    }
}
