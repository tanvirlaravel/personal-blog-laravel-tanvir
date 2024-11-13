
@extends('layouts.app')

@section('title', 'Create a New Post')

@section('content')
    <div class="container mt-5">
        <h1>Create a New Post</h1>



        <form action="{{ route('posts.store') }}" method="POST">
            @csrf


            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>


            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content') }}</textarea>
            </div>


            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
@endsection
