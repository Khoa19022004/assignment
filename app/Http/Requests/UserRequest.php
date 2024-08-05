<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            // 'username'=>'required',
            'email'=>'required|unique:users,email',
            'username'=>'required|unique:users,username',
            'password'=>'required|min:8|confirmed',
            'password_confirmation'=>'required',
            'role'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'username.required'=>"Vui lòng không để trống",
            'username.unique'=>"Email này đã được đăng kí",
            'email.required'=>"Vui lòng không để trống",
            'email.unique'=>"Email này đã được đăng kí",
            'password.required'=>"Vui lòng không để trống",
            'password.confirmed'=>"Mật khẩu và nhập lại mật khẩu không khớp",
            'password_confirmation.required'=>"Vui lòng không để trống",
            'role.required'=>"Vui lòng không để trống",
        ];
    }
}
