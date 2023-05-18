<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
//        return [
//            'title' => 'test'
//        ];

        return response()->json('test');
    }
}
