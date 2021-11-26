<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index(Request $request){

        $PostQuery = Post::query();
        $PostQuery->where('status','=', '1');
        $posts = $PostQuery->paginate(4)->withPath("?" . $request->getQueryString());
        return view('home',compact('posts'));

    }

    public function show(Post $id){

        return view('show', compact('id'));
    }
}
