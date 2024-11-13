<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::latest()->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function show($id){
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:25',
            'content' => 'required|string'
        ]);

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => 1
        ]);

        return redirect()->route('posts.show', $post->id)->with('success', 'Post Created Successfully');
    }


    function edit($id){
       $post = Post::find($id);

       return view('posts.edit', compact('post'));
    }

    function update(Request $request, $id){

        $post = Post::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:25',
            'content' => 'required|string'
        ]);

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.show', $post->id)->with('success', 'Post Updated Successfully');
     }


    public function destroy($id)
    {

        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }

}
