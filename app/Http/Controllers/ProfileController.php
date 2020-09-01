<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ProfileController extends Controller
{
    public function obtenerPerfil(Request $request){
        
        $user = App\User::find($request->id);
        $posts = $user->posts()->with('category','image','tags')->withCount('comments')->get();
        $videos = $user->videos()->with('category','image','tags')->withCount('comments')->get();
        return view('profile',[
            'user' => $user,
            'posts' => $posts,
            'videos' => $videos
        ]);
    }
}
