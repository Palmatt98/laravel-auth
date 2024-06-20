@extends('layouts.admin')
@section('content')
    <h1>Create page</h1>
    <form action="{{ route('admin.posts.store') }}" method="POST">
		@csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Titolo...">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenuto</label>
            <textarea class="form-control" id="content" maxlength="500" name="content" placeholder="Contenuto..."></textarea>
        </div>
        <div class="mb-3">
            <button class="btn btn-success">Salva</button>
        </div>

    </form>
@endsection
