@extends('layouts.app')

@section('title', 'Create')
@section('content')



<form enctype="multipart/form-data" action="{{route('store')}}" class="mt-5">
  <div class="mb-3">
    @csrf
    <label class="form-label">Название Новости</label>
    <input name="title" type="text" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Краткое описание</label>
    <input name="description" type="text" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Текст</label>
    <input name="text" type="text" class="form-control" name="text">
  </div>
  <button type="submit" class="btn btn-primary">Добавить новость</button>
</form>

@endsection