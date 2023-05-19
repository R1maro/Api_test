<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends ApiController
{
    //
    public function index()
    {
//        return [
//            'title' => 'test'
//        ];

//        return response()->json('test');

        return $this->successResponse(Post::all(), 200);

//        return $this->errorResponse('Error',500);
    }

    public function store(Request $request)
    {

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->image = $request->image;
        $post->user_id = $request->user_id;
        $post->save();


        return $this->successResponse($post, 201);

    }


}

;


