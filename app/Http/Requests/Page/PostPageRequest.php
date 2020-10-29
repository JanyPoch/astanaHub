<?php

namespace App\Http\Requests\Page;

use App\Models\Page;
use Illuminate\Foundation\Http\FormRequest;

class PostPageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('store', Page::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category_id'         => 'required|integer',
            'user_id'             => 'required|integer',
            'locale_id'           => 'required|integer',
            'startup_id'          => 'sometimes|nullable|integer',
            'title'               => 'required|string',
            'domain'              => 'sometimes|nullable|string',
            'alias'               => 'sometimes|nullable|integer',
            'active'              => 'sometimes|nullable|integer',
            'commentable'         => 'sometimes|nullable|integer',
            'publish_at'          => 'sometimes|nullable',
            'components.*'        => 'required',
            'components.*.body'   => 'required|json',
            'components.*.active' => 'required|integer',
            'components.*.weight' => 'required|integer',
            'tags.*'              => 'required|integer'

        ];
    }
}
