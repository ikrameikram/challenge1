<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//php artisan make:controller TestController
//Étape 5 : Créer un contrôleur
class TestController extends Controller
{
    //Étape 6 : Ajouter une méthode index
    public function index(){
        return "Je suis le contrôleur TestController";
    }

    // Étape 8 : Ajouter une méthode show
    public function show($nom= 'invité')
    {
        //return view('accueil'); 
        return view('accueil');

    }
    
    // Étape 11 : Méthode greet avec paramètre
    public function greet($prenom = 'invité')
    {
        return "Bonjour, $prenom !";
    }

    //Étape 13 : Afficher un article
    public function showArticle($id = null){
        if ($id){
            return "Vous consultez l'article $id";
        }else{
            return "Aucun article séléctionné";
        }
    }


}
