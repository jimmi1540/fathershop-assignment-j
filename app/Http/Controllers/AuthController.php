<?php

namespace App\Http\Controllers;
use App\Http\Requests\Auth\RegisterUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(RegisterUserRequest $registerUserRequest)
    {
        try {
            $user = User::create($registerUserRequest->only(['full_name', 'mobile', 'email', 'password']));
            return ApiResponse::success([], 'User Registered Successfully.');
        } catch (\Exception $ex) {
            return ApiResponse::error($ex->getMessage());
        }
    }
}
