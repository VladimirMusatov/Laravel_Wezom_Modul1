@extends('layouts.app')

@section('title', 'Create')
@section('content')



<form style="width: 50%; margin: 0 auto;" enctype="multipart/form-data" method="POST" action="{{route('store')}}" class="mt-5">
  <div class="mb-3">
    @csrf
    <label class="form-label">Название Новости</label>
    <input name="title" type="text" class="form-control">
  </div>

  <select name="category_id" class="mb-3 form-select" aria-label="Пример выбора по умолчанию">
  <option selected>Выберете категорию</option>
  @foreach($categories as $category)
  <option value="{{$category->id}}">{{$category->title}}</option>
  @endforeach
  </select>

  <div class="mb-3">
    <label class="form-label">Краткое описание</label>
    <input name="description" type="text" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Текст</label>
    <textarea name="text"  type="text" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Добавить новость</button>
</form>

@endsection