<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
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

    protected function successResponse($data,$code,$message=null){
        return response()->json([
                'status' => 'success',
                'message' => '',
                'data' => $data,
            ]
            ,$code);
    }
    protected function errorResponse($message=null,$code){
        return response()->json([
                'status' => 'error',
                'message' => $message,
                'data' => '',
            ]
            ,$code);
    }


};


