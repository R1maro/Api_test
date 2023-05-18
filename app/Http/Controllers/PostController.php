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

        return $this->successResponse(Post::all(),200);

//        return $this->errorResponse('Error',500);
    }




};


