<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LevelController extends Controller
{
    public function obtenerPostOfLevel(Request $request){
        $level = App\Level::find($request->id);
        $posts = $level->posts()->with('category','image','tags')->withCount('comments')->get();
        $videos = $level->videos()->with('category','image','tags')->withCount('comments')->get();
        return view('level',[
            'level' => $level,
            'posts' => $posts,
            'videos' => $videos
        ]);
    }
}
