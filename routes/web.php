<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/home', function () { // étape 2 : Créer une route simple
    return 'Bonjour Laravel';// affiche bonjour laravel
});

//php artisan make:view acceuil
Route::get('/', function () { //Étape 4 : Router la vue
    return view ('accueil');
});

//Étape 7 : Router la méthode index du controlleur 
Route::get('/', [TestController::class, 'index']);

//Étape 9 : Routes nommées
Route::get('/home', [TestController::class, 'show']); // affiche acceuil

//Étape 10 : Paramètres de route optionnels
Route::get('/home/{name?}', function (?string $name = null) {
    return 'Bonjour '.($name ?? 'Ikory');
});

//Étape 11 : Méthode greet avec paramètre
Route::get('/salutations/{prenom?}', [TestController::class, 'greet']); 

//Étape 12 : Route avec plusieurs paramètres
//Étape 14 : Contraintes de route (done avec int)
Route::get('/profile/{id?}/{age?}', function (?int $id = null, ?int $age = null) {
    return 'Utilisateur ' . ($id ?? 'inconnu') . ' a ' . ($age ?? 'on ne connais pas combien de ') . ' ans.';
});

//Étape 13 : Afficher un article
Route::get('/article/{id?}',[TestController::class,'showArticle']);

