<?php

namespace App\Http\Requests\Zone;

use Illuminate\Foundation\Http\FormRequest;

class ZoneCreateRequest extends FormRequest
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
            'name' => 'required|unique:zones|max:100',
            'city_id' => 'required'
        ];
    }
}
