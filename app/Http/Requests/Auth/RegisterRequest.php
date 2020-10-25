<?php

namespace App\Http\Requests;

use App\Rules\PhoneNumber;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
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
            'firstname' => 'required|string',
            'lastname'  => 'required|string',
            'phone'     => ['required', new PhoneNumber, Rule::unique('users')],
            'email'     => ['required', 'string', Rule::unique('users')],
            'password'  => 'required|string|min:8'
        ];
    }
}
