@extends('layouts.app')

@section('content')


  <!-- Форма для фильтраци -->
  <form  method="GET" action="{{route('home')}}">
    <!-- Флажок для фильтрации по статусу новости -->

    <!-- Фильтрация по дате публикаций -->
      <select name="sort" class="form-select mt-3 mb-3" aria-label="Default select example">
      <option selected>
        Сортировать по
      </option>
      <option value="1">Сначала новые</option>
      <option value="2">Сначала старые</option>
      <option value="3">Новости с самым высоким рейтингом</option>
      <option value="4">Новость с самым низким рейтингом</option>
    </select>
    <div>  
      <button type="submit" class="btn col-sm btn-primary mb-3">Фильтр</button>
      <a href="{{route('home')}}" class="btn col-sm btn-primary mb-3">Сброс Фильтра</a>  
    </div>
  </form>



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
