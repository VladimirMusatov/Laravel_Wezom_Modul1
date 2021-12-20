@extends('layouts.app')

@section('content')


  <!-- Форма для фильтраци -->
  <form  method="GET" action="{{route('home')}}">

    <!-- Фильтрация по дате публикаций -->
      <select name="sort" class="form-select mt-3 mb-3" aria-label="Default select example">
      <option>
        Сортировать по
      </option>
      <option value="1" @if($sort == 1)selected @endif>Сначала новые</option>
      <option value="2" @if($sort == 2)selected @endif>Сначала старые</option>
      <option value="3" @if($sort == 3)selected @endif>Новости с самым высоким рейтингом</option>
      <option value="4" @if($sort == 4)selected @endif>Новость с самым низким рейтингом</option>
    </select>
    <div style="display:flex; flex-direction: column;">  
      <button type="submit" class="btn col-sm btn-primary mb-3" style="width: 25%">Фильтр</button>
      <a href="{{route('home')}}" class="btn col-sm btn-primary mb-3" style="width: 25%">Сброс Фильтра</a>  
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
