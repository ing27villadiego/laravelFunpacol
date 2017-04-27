<?php

namespace App\Http\Requests\Account\Collection;

use Illuminate\Foundation\Http\FormRequest;

class CollectionRequest extends FormRequest
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
            'receipt_code' => 'required|max:6|unique:collections',
            'godfather_id' => 'required',
            'postmen_id' => 'required',
            'date_collection' => 'required',
            'value_collected' => 'required|numeric'
        ];
    }
}
