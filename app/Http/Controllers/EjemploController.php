<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    public function index(){

        return view('vistalogin');

    }

    public function acceso(){


        return ['success' => 1, "mensaje" => "llega al controlador tipo GET"];


    }


}
