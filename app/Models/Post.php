<?php

namespace App\Models;
//Étape 4 : Créer le modèle
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model//lié à la table posts
{
    use HasFactory;

        protected $fillable = [// pour que les champs ne soient pas rempli null et eviter faille de sécurité 
        'title',
        'author',
        'content',
        'status',
    ];
}
