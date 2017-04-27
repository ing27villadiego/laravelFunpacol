<?php

namespace App\Http\Requests\Godchildren;

use Illuminate\Foundation\Http\FormRequest;

class GodchildrenRequest extends FormRequest
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
            'first_name' => 'required|max:150',
            'last_name' => 'required|max:150',
            'city_id' => 'required'
        ];
    }
}
