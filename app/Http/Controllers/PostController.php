<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function store(PostRequest $request)
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
    }

    public function show(string $id): View
    {
        return view('post.show', [
            'post' => Post::findOrFail($id);
        ])
    }
}

