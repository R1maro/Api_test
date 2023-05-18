<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
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
}
