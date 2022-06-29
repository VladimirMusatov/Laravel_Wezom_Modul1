<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class AdminController extends Controller
{
    //Вывод списка новостей
    public function index(){
        $posts = Post::all();
        return view('admin', compact('posts'));
    }

    //Добавление новости
    public function create(){

        $categories = Category::all();

        return view('form',compact('categories'));
    }

    //Сохранение новости в базу данных
    public function store(Request $request){

        $data = $request->all();

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