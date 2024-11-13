
@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <div class="container mt-5">
        <h1>Edit Post</h1>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PATCH')


            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}" >
            </div>


            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" >{{ old('content', $post->content) }}</textarea>
            </div>


            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
@endsection
