<?php

namespace App\Http\Controllers;

class ApiResponse
{

    /**
     * Generate a success response.
     *
     * @param  mixed  $data
     * @param  string  $message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function success($data = null, $message = 'Success', $status = 'success')
    {
        return response()->json(
            [
            'status' => $status,
            'data' => $data,
            'message' => $message
            ],
            200);
    }

    /**
     * Generate an error response.
     *
     * @param  string  $message
     * @param  int  $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    public static function error($message = 'Internal Server Error', $statusCode = 500, $status = 'error')
    {
        return response()->json(
            [
                'status' => $status,
                'message' => $message // add sql filter method here to hide db information.
            ],
            $statusCode);
    }
}
