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

        $filename = $data['image']->getClientOriginalName();

        $data['image']->move(Storage::path('/public/image/news/').'origin/',$filename);

        //Сохраняем обрезанное изображение для вывода в списке новостей
        $thumbnail = Image::make(Storage::path('/public/image/news/').'origin/'.$filename);
        $thumbnail ->fit(300,300);
        $thumbnail->save(Storage::path('/public/image/news/').'thumbnail/'.$filename);

        $data['image'] = $filename;

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