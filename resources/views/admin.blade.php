@extends('layouts.app')

@section('content')

<a  class="btn btn-dark mb-4" href="{{route('create')}}">Написать новость</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Название новости</th>
      <th scope="col">Описание</th>
      <th scope="col">Текст</th>
      <th scope="col">Статус</th>
      <th scope="col">Action</th>  
    </tr>
  </thead>
  <tbody>
@foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td><a href="{{route('show',$post)}}">{{$post->title}}</a></td>
      <td>{{$post->description}}</td>
      <td>{{$post->text}}</td>
      <td>
            @if(($post->status) == 0)
                 Новость опубликована
           @else
                 Новсоть опубликована
           @endif
      </td>

      <td>
        <a class="btn btn-danger" href="{{route('delete', $post)}}">Удалить новость</a>
      </td>      
             
      <td>
         @if(($post->status) == 0)      
          <form action="{{route('publish', $post)}}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" value="1" name="status">
            <button type="submit" class="btn btn-success">Опубликовать новость</button>
          </form>
         @endif
      </td>
    </tr>
@endforeach
  </tbody>
</table>
@endsection