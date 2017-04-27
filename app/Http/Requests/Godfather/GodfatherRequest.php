<?php

namespace App\Http\Requests\Godfather;

use Illuminate\Foundation\Http\FormRequest;

class GodfatherRequest extends FormRequest
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
            'date_membership'=> 'required',
            'code_godfather'=> 'required|max:5',
            'promoter_id'=> 'required',
            'adviser_id'=> 'required',
            'first_name' => 'required|max:150',
            'last_name' => 'required|max:150',
            'address_house'=> 'required|max:100',
            'department_id'=> 'required',
            'city_id'=> 'required',
            'godchildren_id'=> 'required',
            'paymenttype_id'=> 'required',
            'paymentperiod_id'=> 'required',
            'type_godfather'=> 'required',
            'value_donation'=> 'required',
            'day_colletion'=> 'required|numeric',

        ];
    }
}
