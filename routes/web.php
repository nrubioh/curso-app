<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return "check message from route web.php"; 
});

Route::get('/games', function(){
    return "welcome to the game list";
});


//OPTIONAL VARIABLE => USE "?" AFTER THE VAR AND "= null" IN THE FUNCTION
Route::get('/games/{name_game}/{category?}', function($name_game,$category = null){
    if ($category) {
        return "welcome to $name_game, this game belongs to $category";
    }else{
        return "welcome to $name_game";
    }
});
