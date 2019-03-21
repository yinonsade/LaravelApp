<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

///לעשות יוז לריקוטס
class Profile extends FormRequest
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
            'name' => 'required|min:2|max:70',
            'email' => 'required|email',
            'password' => 'required|min:6|max:60',
            'telephone' => 'required|min:2|max:15',
            'a-name' => 'required|min:2|max:20',
            'a-line1' => 'required|min:2|max:20',
            'a-line2' => 'required|min:2|max:20',
            'a-city' => 'required|min:2|max:20',
            'a-region' => 'required|min:2|max:20',
            'a-city' => 'required|min:2|max:20',
            'a-postal-code' => 'required|min:2|max:20',
            'a-country' => 'required|min:2|max:20',

        ];
    }
}