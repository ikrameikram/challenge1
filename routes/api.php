<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


//Étape 6 : Définir les routes

Route::get('/posts', [PostController::class, 'index']);       // lister tous les posts
Route::post('/posts', [PostController::class, 'store']);      // créer un post
Route::get('/posts/{id}', [PostController::class, 'show']);   // afficher un post
Route::put('/posts/{id}', [PostController::class, 'update']); // mettre à jour un post
Route::delete('/posts/{id}', [PostController::class, 'destroy']); // supprimer un post
