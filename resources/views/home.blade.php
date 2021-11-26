@extends('layouts.app')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Название новости</th>
      <th scope="col">Описание</th>
      <th scope="col">Текст</th>
      <th scope="col">Дата публикации</th>
      <th scope="col">Количество просмотров</th>      
    </tr>
  </thead>
  <tbody>
@foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td><a href="{{route('show',$post)}}">{{$post->title}}</a></td>
      <td>{{$post->description}}</td>
      <td>{{$post->text}}</td>
      <td>{{$post->created_at}}</td>
      <td>{{$post->view_count}}</td>
    </tr>
@endforeach
  </tbody>
</table>

{{$posts->links('vendor.pagination.bootstrap-4')}}
@endsection
