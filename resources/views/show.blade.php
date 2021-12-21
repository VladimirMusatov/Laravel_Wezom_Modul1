@extends('layouts.app')

@section('title', '$post->title')	

@section('content')

	<a href="{{route('home')}}">Вернуться на главную</a>

	<h1>Название :{{$post->title}}</h1>
	<p>Описание  :{{$post->description}}</p>
	<p>Количество просмотров:{{$post->view_count}}</p>
	<p><img src="{{Storage::url($post->image)}}"></p>
	<div class="text">
		{{$post->text}}
	</div>

	<div class="date">
		Created : {{$post->created_at}} <br>
		Updated : {{$post->updated_at}}
	</div>
@endsection