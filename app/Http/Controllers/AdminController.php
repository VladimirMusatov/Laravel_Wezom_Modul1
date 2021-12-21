<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    //Вывод списка новостей
    public function index(){
        $posts = Post::all();
        return view('admin', compact('posts'));
    }

    //Добавление новости с возможностью прикрепить изображение
    public function create(){
        return view('form');
    }

    //Сохранение новости в базу данных
    public function store(Request $request){

        $data = $request->all();

        $filename = $data['image']->getClientOriginalName();

        $data['image']->move(Storage::path('/public'),$filename);

        $data['image'] = $filename;

        Post::create($data);
        return redirect()->route('admin');
    }

    //Изменение статуса с не опубликованой на опублиокваную новость
    public function publish(Request $request, Post $id){

        $id->update($request->all());
        return redirect()->route('admin');
    }

    //Удаление новости
    public function destroy(Post $id)
    {
        $id->delete();
        return redirect()->route('admin');
    }
}