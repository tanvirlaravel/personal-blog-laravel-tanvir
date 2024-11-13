
@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <div class="container mt-5">

        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <p><strong>Author:</strong> {{ $post->user->name }}</p>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-3">Back to All Posts</a>

    </div>
@endsection
