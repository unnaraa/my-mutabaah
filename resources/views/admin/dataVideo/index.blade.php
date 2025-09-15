@extends('template.index')

@section('main')
<div class="container">
    <h1>Videos</h1>
    <a href="{{ route('videos.create') }}" class="btn btn-primary">Add Video</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Video</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($videos as $video)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $video->judul }}</td>
                    <td>
                        <iframe width="200" height="150" src="{{ $video->link }}" frameborder="0" allowfullscreen></iframe>
                    </td>
                    <td>
                        <a href="{{ route('videos.show', $video) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('videos.edit', $video) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('videos.destroy', $video) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection