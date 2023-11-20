<?php

namespace App\Http\Controllers;
 use iluminate\http\Request;

 class RegisterController extends Controller{
    public function index(){
        return view('register');
 }
}