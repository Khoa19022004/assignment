<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetRequest extends FormRequest
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
            'password'=>'required|min:8|confirmed',
            'password_confirmation'=>'required|min:8'
        ];
    }
    public function messages()
    {
        return [
            'password.required'=>"Vui lòng nhập mật khẩu mới",
            'password.min'=>"Mật khẩu ít nhất phải có 8 ký tự",
            'password.confirmed'=>"Mật khẩu mới và nhập lại phải khớp nhau",
            'password_confirmation.required'=>"Vui lòng nhập lại mật khẩu",
        ];
    }
}
