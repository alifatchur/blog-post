@extends('app')

@section('content')
    <h2>{{ $post->content }}</h2>
    <div class="card text-start">
        <p><b>Total Komentar: {{ $total_comments }}</b></p>
        @foreach ($comments as $comment)
        <div class="card-body">
            <p class="card-text">{{ $comment->comment }}</p>
        </div>
        @endforeach
    </div>
    
    <div class="mt-3"><a href="{{ url('posts') }}" class="btn btn-primary">Kembali</a></div>
@endsection