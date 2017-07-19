<?php

if (!function_exists('json_response')) {
    /**
     * @param bool $status
     * @param int $code
     * @param null $message
     * @param null $data
     * @return \Illuminate\Http\JsonResponse
     */
    function json_response($status = true, $code = 200, $message = null, $data = null)
    {
    	if (!$status) {
    		return response()->json([
    			'status' => false,
    			'code' => $code,
    			'message' => $message
    			], $code);
    	}
    	return response()->json([
    		'status' => true,
    		'code' => $code,
    		'message' => $message,
    		'data' => $data
    		], $code);
    }
}
