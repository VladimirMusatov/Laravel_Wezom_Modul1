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


        $sort = $request->sort;

        $PostQuery = Post::query();

        if($sort == 1){
            $PostQuery ->orderBy('created_at', 'desc');
        }

        elseif($sort == 2){
            $PostQuery ->orderBy('created_at', 'asc');
        } 

        elseif($sort == 3){
            $PostQuery ->orderBy('view_count' , 'desc');
        }

        elseif($sort == 4){
            $PostQuery ->orderBy('view_count' , 'asc');
        }  

        //Выводить только опубликованные новости
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
