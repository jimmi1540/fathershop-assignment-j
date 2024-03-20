<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => 'required',
            'mobile' => 'required|mobile|unique:users,mobile',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'string', 'min:8'],
        ];
    }
    public function messages(): array
    {
        return [
            'full_name.required' => 'Full Name is required.',
            'mobile.required' => 'Mobile Number is Required',
            'email.required' => 'Email is required.',
            'password.required' => 'Valid Password is Required',
        ];
    }
}
