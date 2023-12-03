<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Videogame;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVideogame;
use PhpParser\Builder\Function_;

class GamesController extends Controller
{
    public function index(){
        //$video_games_list = array('Final Fantasy IX','Pokemon Yellow','ToyStory 2','Mario Galaxy');
        $video_games_list = Videogame::orderBy('id','desc')->get();
        //dd($video_games_list);
        return view('index',[
            'video_game_list_html' => $video_games_list
        ]);
    }

    public function create(){
        $categories_list = Category::all();
        //dd($categories_list);
        return view('create', [
            'category_list_html' => $categories_list
        ]);
    }

    public function help($name_game, $category = null){
        $date = now();
        return view('show', [
            'name_game_html'=> $name_game,
            'category_html'=> $category,
            'date_html' => $date
        ]);
    }
    /*
    public function help($name_game, $category = null){
        if ($category) {
            return "welcome to $name_game, this game belongs to $category category";
        }else{
            return "welcome to $name_game";
        }
    } 
    */
    public function storeVideogame(StoreVideogame $request){
        $game = new Videogame;
        $game->name = $request->name_game; /*create.blade input name "name_game"*/
        $game->description = "";
        $game->category_id = $request->category_id; /*create.blade select name "category_id"*/
        $game->active = 0;
        $game->save();

        return redirect()->route('gamesIndex');
    }
    /* 
    public function storeVideogame(Request $request){
        $request->validate([
            'name_game'=>'required |min:4|max:10|',
        ]);
    } 
    */
    public function view($id_game){
        $game_update = Videogame::find($id_game);
        $category_update = Category::all();

        return view('updateVideogame',[
            'game_update_html' => $game_update,
            'category_update_html' => $category_update
        ]);
    }

    public function updateVideogame(Request $request){
        $request->validate([
            'name_game'=>'required |min:4|max:10|',
        ]);
        $game = Videogame::find($request->update_game_id);
        $game->name = $request->name_game; /*create.blade input name "name_game"*/
        $game->description = "";
        $game->category_id = $request->category_id; /*create.blade select name "category_id"*/
        $game->active = 0;
        $game->save();
        return redirect()->route('gamesIndex');
    }
}
