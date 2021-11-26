<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function index(){

        $posts = Post::all();
        return view('admin', compact('posts'));
    }

    public function create(){
        return view('form');
    }

    public function store(Request $request){

        $data = $request->all();
        Post::create($data);
        return redirect()->route('admin');
    }

    public function publish(Request $request, Post $id){

        $id->update($request->all());
        return redirect()->route('admin');
    }

    public function destroy(Post $id)
    {
        $id->delete();
        return redirect()->route('admin');
    }
}