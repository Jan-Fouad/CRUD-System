<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepostRequest;
use App\Http\Requests\UpdatepostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
       
        $posts = Post::all(); 
        return view('posts.index',get_defined_vars());
    }

    
    public function show(Post $post) 
     {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        $users = User::all();

        return view('posts.create', ['users' => $users]);
    }

    public function store(StorepostRequest $request)
    {
        $data=$request->validated();
        Post::create($data);
        return to_route('posts.index');
    }

    public function edit(Post $post)
    {
        $users = User::all();

        return view('posts.edit', get_defined_vars());
    }

    public function update(UpdatepostRequest $request, $id)
    {
        $data = $request->validated();
        
        $post = Post::findOrFail($id);
        $post->update($data);
        
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }
    public function destroy($postId)
    {
        
        $post = Post::find($postId);
        $post->delete();

        Post::where('id', $postId)->delete();

    
        return to_route('posts.index');
    }
}
