@extends('layouts.main')
@section('content')
<h1 class="text-center p-3">Расскажи нам свою историю</h1>
<form action="" method="post" class="needs-validation form-layout" id="form" novalidate>
       @csrf
    <div class="mb-3">
        <label for="author" class="form-label">Автор текста</label>
        @error('author')
        <div class="text-danger">Необходимо заполнить поле</div>
        @enderror
        <input type="text" name="author" class="input-border form-control" id="author" required>
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Название поста</label>
        @error('title')
        <div class="text-danger">Необходимо заполнить поле</div>
        @enderror
        <input type="text" name="title" class="input-border form-control" id="title" required>
    </div>
    <div class="mb-3">
        <label for="descr" class="form-label">Текст поста</label>
        @error('descr')
        <div class="text-danger">Необходимо заполнить поле</div>
        @enderror
        <textarea name="text" class="form-control input-text" id="descr" rows="3" required></textarea>
    </div>
    <button class="btn btn-light border-btn" type="submit">Отправить</button>
</form>
@endsection
