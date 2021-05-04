<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|unique:posts|max:255',
            'password' => 'required|password:api',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'A email is required',
            'password.required' => 'A password is required',
            'password.password:api' => 'A password is required',
        ];
    }
}
