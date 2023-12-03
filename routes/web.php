<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;

Route::get('/', function () {
    //return "check message from route web.php"; 
    return view('welcome');
});

Route::get('/games', [GamesController::class, 'index'])->name('gamesIndex');
/* 
    Route::get('/games', function(){
        return "welcome to the game list";
    }); 
*/
Route::get('/games/create', [GamesController::class, 'create'])->name('gamesCreate');
Route::get('/games/{name_game}/{category?}', [GamesController::class, 'help']);
/*
|------------------------------------------------------------------------------------
| OPTIONAL VARIABLE => USE "?" AFTER THE VAR AND "= null" IN THE FUNCTION
|------------------------------------------------------------------------------------
| Route::get('/games/{name_game}/{category?}', function($name_game,$category = null){
|  if ($category) {
|      return "welcome to $name_game, this game belongs to $category";
|  }else{
|      return "welcome to $name_game";
|       }
|  });
*/
Route::post('/games/storeVideogame', [GamesController::class, 'storeVideogame'])->name('gamesStoreVideogame');
Route::get('/view/{id_game}', [GamesController::class, 'view'])->name('gamesView');
Route::post('/games/update', [GamesController::class, 'updateVideogame'])->name('gamesUpdateVideogame');

