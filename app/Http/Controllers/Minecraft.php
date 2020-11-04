<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Minecraft extends Controller
{
    public function plantilla(){
        return view('plantilla');
    }

    public function picasso(){
        return view('picasso');
    }

    public function monet(){
        return view('monet');
    }

    public function dali(){
        return view('dali');
    }

    public function van(){
        return view('van');
    }

    public function vinci(){
        return view('vinci');
    }
}
