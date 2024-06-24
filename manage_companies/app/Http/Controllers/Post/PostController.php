<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        // Store image if it's present in the request
        if ($request->hasFile('image')) {
            $post->addMedia($request->file('image'))->toMediaCollection('images', 'public');
        }

        return redirect()->route('posts.show', $post);

    }


    public function show(Post $post)
    {
        $postImages = $post->getMedia('images');

        return view('posts.show', compact('post', 'postImages'));
    }
}
