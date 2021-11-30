<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/home');

Auth::routes();


//Общедоступные роуты

//Просмотр списка новостей с разбивкой по страницам
Route::get('/home',[PostController::class,'index'])->name('home');
//Просмотр одной новости
Route::get('/show/{id}',[PostController::class,'show'])->name('show');


// Роуты доступные лишь пользователю с ролью admin
Route::group(['middleware' => ['role:admin']], function(){

    //Админпанель
    Route::get('/admin',[AdminController::class,'index'])->name('admin');
    //Добавление новости с возможностью прикрепить изображение
    Route::get('/create',[AdminController::class,'create'])->name('create');
    //Удаление новости
    Route::get('/delete/{id}',[AdminController::class, 'destroy'])->name('delete');
    //Сохранение новости
    Route::post('/store',[AdminController::class,'store'])->name('store');
    //Изменение статуса новости
    Route::put('/publish/{id}',[AdminController::class,'publish'])->name('publish');
});