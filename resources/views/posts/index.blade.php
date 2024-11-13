

@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">All Posts</h1>

        @if ($posts->isEmpty())
            <p class="text-center">No posts available.</p>
        @else
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }} </h5>
                                <p>Id: <small>({{ $post->id }})</small></p>
                                <p class="card-text">
                                    {{ Str::limit($post->content, 100) }}
                                </p>
                                <a href="" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $posts->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </div>
@endsection
