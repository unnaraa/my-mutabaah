@extends('template.index')

@section('style')
<style>
    .video-container {
        position: relative;
        padding-bottom: 56.25%;
        /* Aspect ratio 16:9 */
        height: 0;
        overflow: hidden;
        max-width: 100%;
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

</style>
@endsection
@section('main')

<div class="container">
    <h1>Detail Video</h1>

    <div class="card mb-4">
        <div class="card-body">
            <h2 class="mb-5">{{ $video->judul }}</h2>

            <div class="video-container my-3">
                <iframe src="https://www.youtube.com/embed/{{ \Illuminate\Support\Str::afterLast($video->link, '/') }}"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>

            <p class="mt-2"><strong>Link Asli:</strong> <a href="{{ $video->link }}" target="_blank">{{ $video->link }}</a></p>
        </div>
    </div>

    <div class="card-footer">
        <a href="{{ route('videos.index') }}" class="btn btn-secondary">Back to List</a>
        <a href="{{ route('videos.edit', $video) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('videos.destroy', $video) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </div>
</div>

@endsection