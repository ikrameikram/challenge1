


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

/*Route::get('/', function () {
    return 'Bonjour Laravel';
});*/

Route::get('/ninjas',function(){
    return view('ninjas');
});
/*Route::get('/', function () {
    return view ('accueil');
});

php artisan make:controller TestController

Route::get('/', function () {
    return view ('accueil');
});



//Route::get('/', [TestController::class, 'index']);
//Route::get('/accueil', [TestController::class, 'show']);
//Route::get('/accueil', [TestController::class, 'show'])->name('home');
//Route::get('/chemin/{param}', [MonController::class, 'maMethode']);
Route::get('/TestController/{prenom}', [TestController::class, 'greet'])->name('TestController');
*/