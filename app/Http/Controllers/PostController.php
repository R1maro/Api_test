<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
//        return [
//            'title' => 'test'
//        ];

//        return response()->json('test');

        return response()->json(Post::all(),404);
    }
}


