<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id)
    {
        $data['post'] = Post::with('author','category')->findOrFail($id);
        $data['post']->increment('total_read');
        return view('front.post.show',$data);
    }
}
