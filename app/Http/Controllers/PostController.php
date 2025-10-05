<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(PostRequest $request)
    {
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
    }
}

