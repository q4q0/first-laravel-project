<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show($postId)
    {
        $post = Post::find($postId);
        if (!$post) {
            abort(404);
        }
        return view('post', [
            'post' => $post
        ]);
    }
}
