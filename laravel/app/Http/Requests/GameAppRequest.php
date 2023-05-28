<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameAppRequest extends FormRequest
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
            'app_id' => 'required|string',
            'title' => 'required|string',
            'introduction' => 'nullable|string',
//            'icon' => 'required',
//            'main_image' => 'required',
            'icon' => 'nullable',
            'main_image' => 'nullable',
            'sub_image' => 'nullable'
        ];
    }
}
