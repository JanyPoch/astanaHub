<?php

namespace App\Http\Requests;

use App\Rules\PhoneNumber;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('update', $this->route('user'));
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
            'phone'     => ['required', new PhoneNumber, Rule::unique('users')->ignore($this->route('user')->id)],
            'email'     => ['required', 'string', Rule::unique('users')->ignore($this->route('user')->id)]
        ];
    }
}
