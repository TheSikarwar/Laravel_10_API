<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function list(){
        $posts= Post::all();
        return new PostResource($posts);
    }
    public function store(Request $request)
    {
        $post = Post::create($request->all());
        return new PostResource($post);
    }
}
