@extends('layouts.main')
@section('content')
<a class="fs-6 p-2" href="{{ route('main') }}"><i class="bi bi-skip-backward-circle me-2"></i>Вернуться</a>
<div class="card-body table-responsive p-0">
    @if(count($categories) > 0)
    <table class="table table-hover text-nowrap">
        <thead>
        <tr>
            <th>ID</th>
            <th>Author name</th>
            <th>Title</th>
            <th>Text</th>
            <th>Published</th>
            <th class="text-center">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->author}}</td>
            <td>{{$item->title}}</td>
            <td class="text-truncate" style="max-width: 150px;">{{$item->text}}</td>
            <td>{{$item->created_at}}</td>
            <td class="d-flex justify-content-between">
                <a class="me-1" href="{{ route('show.post', $item->id )}}"><i class="bi bi-eye"></i></a>
                <a class="text-warning" href="{{ route('edit.post', $item->id )}}"><i class="bi bi-pencil"></i></a>
                <form
                    action="{{route('destroy.post', $item->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="border-0 text-danger bg-transparent" type="submit">
                        <i class="bi bi-trash3"></i>
                    </button>
                </form>
            </td>

        </tr>
        @endforeach
        </tbody>
    </table>
@else
    <p class="fs-3 text-danger text-center">Еще не опубликовано ни одного поста</p>
@endif
</div>
@endsection
