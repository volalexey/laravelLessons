<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function send_response($result, $msg){
        $response = [
          'success' => true,
          'data' => $result,
          'message' => $msg
        ];
        return response()->json($response, 200);
    }
    public function send_error($error, $msg = [], $code = 404){
        $response = [
            'success' => false,
            'message' => $error
        ];
        if(!empty($msg)){
            $response['data'] = $msg;
        }
        return response()->json($response, $code);
    }
}
