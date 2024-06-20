@extends('layouts.admin')
@section('content')
    <h1>Modifica post</h1>
    <form action="{{ route('admin.posts.update', ['post' => $post->slug]) }}" method="POST">
		@csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Titolo..." value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea class="form-control" id="content" maxlength="500" name="content" placeholder="Contenuto...">{{$post->content}}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Salva</button>
        </div>

    </form>
@endsection
