<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStartupRequest extends FormRequest
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
            'name'             => 'required|string',
            'start_capital'    => 'sometimes|nullable|numeric',
            'investments'      => 'sometimes|nullable|integer',
            'investments_sum'  => 'sometimes|nullable|numeric',
            'city_id'          => 'required|integer',
            'foundation_year'  => 'required|digits:4|numeric',
            'description'      => 'required|string',
            'problem_solution' => 'required|string',
            'sales_sum'        => 'sometimes|nullable|numeric',
            'income'           => 'sometimes|nullable|numeric',
            'locales.*'        => 'required|integer',
            'industries.*'     => 'required|integer'
        ];
    }
}
