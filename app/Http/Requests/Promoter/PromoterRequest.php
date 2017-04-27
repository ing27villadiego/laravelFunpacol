<?php

namespace App\Http\Requests\Promoter;

use Illuminate\Foundation\Http\FormRequest;

class PromoterRequest extends FormRequest
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
            'dokumenttyp_id' => 'required',
            'document' => 'required|unique:employees|max:15',
            'address' => 'max:50',
            'cell_phone' => 'max:10',
            'city_id' => 'required'
        ];
    }
}
