@extends('app')

@section('content')
    <div class="p-4">
        <h2>{{ $post->content }}</h2>
    </div>

    <div class="card text-start p-2">
        <p><b>Total Komentar: {{ $total_comments }}</b></p>
        @foreach ($comments as $comment)
        <div class="card-body">

            <div class="card">
                <div class="card-body">
                    <p class="card-text">{{ $comment->comment }}</p>
                </div>
            </div>

        </div>
        @endforeach
    </div>

    <div class="mt-3"><a href="{{ url('posts') }}" class="btn btn-primary">Kembali</a></div>
@endsection
