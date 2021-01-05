<?php namespace App\Http\Utils;

/*
    trait for response json

*/
trait ResponseApiJson {

    public function responseSuccessJson($data, $msg=null) {
        return response()->json([
            'response' => ['data' => $data],
            'metadata' => ['statusCode' => 200, 'message' =>$msg]
        ]);
    }

    public function responseErrorJson($msg) {
        return response()->json([
            'response' => ['data' => null],
            'metadata' => ['statusCode' => 505, 'message' => $msg]
        ]);
    }
    public function responseTokenAccessJson($token, $msg) {
        return response()->json([
            'response' => ['data' => null, 'token' => $token],
            'metadata' => ['statusCode' => 200, 'message' => $msg]
        ]);
    }
}

?>
