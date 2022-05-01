<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LynngController extends Controller
{
    public function index(){
        $texto = "ola";
        return view('welcome',['texto' => $texto]);
    }
}
