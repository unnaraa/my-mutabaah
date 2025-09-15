@extends('template.index')

@section('main')
<div class="container">
    <h1>Add Video</h1>

    <form action="{{ route('videos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">YouTube Link</label>
            <input type="url" name="link" id="link" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection