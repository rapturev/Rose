<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(): View
    {

    }

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

    public function edit(): View
    {

    }

    public function update(): View
    {

    }

    public function destroy(): View
    {

    }
}

