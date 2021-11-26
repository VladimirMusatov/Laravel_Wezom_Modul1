@extends('layouts.app')

@section('title', '$id->title')	

@section('content')

	<a href="{{route('home')}}">Вернуться на главную</a>

	<h1>Название :{{$id->title}}</h1>
	<p>Описание  :{{$id->description}}</p>
	<p>Количество просмотров:{{$id->view_count}}</p>
	<div class="text">
		{{$id->text}}
	</div>

	<div class="date">
		Created : {{$id->created_at}} <br>
		Updated : {{$id->updated_at}}
	</div>
@endsection