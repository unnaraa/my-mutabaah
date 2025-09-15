@extends('template.index')

@section('main')
<div class="container">
    <h1>Edit Video</h1>

    <form action="{{ route('videos.update', $video) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul Video</label>
            <input 
                type="text" 
                class="form-control" 
                id="judul" 
                name="judul" 
                value="{{ old('judul', $video->judul) }}" 
                required>
        </div>

        <div class="mb-3">
            <label for="link" class="form-label">Link YouTube</label>
            <input 
                type="url" 
                class="form-control" 
                id="link" 
                name="link" 
                value="{{ old('link', $video->link) }}" 
                required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('videos.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection