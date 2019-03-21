<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CategoryRequest extends FormRequest
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
    public function rules(Request $request)
    {
        $item_id = !empty($request['item_id']) ? ',' . $request['item_id'] : '';
        return [
            'title' => 'required',
            'url' => 'required|regex:/^[a-z\d-]+$/|unique:categories,curl' . $item_id,
            'article' => 'required',
            'image' => 'image',

        ];
    }

    public function messages()
    {
        return [
            'url.regex' => 'category url can contain only: with a-z, numbers and - ',
        ];
    }
}