@extends('layouts.main')
@section('content')
<div class="card shadow-lg p-3 mb-5 mt-2 bg-body-tertiary rounded">
     <a class="fs-6 p-2" href="{{ route('show.list') }}"><i class="bi bi-skip-backward-circle me-2"></i>Вернуться</a>
     <div class="card-body">
        <h5 class="card-title">Автор: {{$categories->author}}</h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">Название поста: {{$categories->title}}</h6>
        <p class="card-text">Дата публикации: {{$categories->created_at}}</p>
        <p class="card-text">{{$categories->text}}</p>

    </div>
</div>
@endsection
