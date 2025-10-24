<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return "Je suis le contrôleur TestController";
    }

    public function show($nom= 'invité')
    {
        //return view('accueil'); 
        return "bonjour, $nom !";
    }

    public function greet($prenom)
    {
        return "Bonjour, $prenom !";
    }

}
