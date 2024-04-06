@extends('app')

@section('content')
    <h1>Halaman Update Data</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}" placeholder="create new title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Isi</label>
            <textarea class="form-control" placeholder="Leave a comment here" id="content" style="height: 100px" name="content">{{ $post->content }}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <div class="mb-3">
        <a href="{{ url('/posts') }}" class="btn btn-primary">Kembali</a>
    </div>    
@endsection