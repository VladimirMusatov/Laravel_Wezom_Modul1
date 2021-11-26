<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Events\PostHasViewed;
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

    public function show($id){

        $post = Post::findOrFail($id);
        event(new PostHasViewed($post));
        return view('show', compact('post'));
    }
}
