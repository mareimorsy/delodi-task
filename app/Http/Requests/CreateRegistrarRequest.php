<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRegistrarRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'governorate' => 'required|integer|min:0|max:26',
            'specialization' => 'required|boolean',
            'area' => 'required|integer|min:0|max:318',
            'university' => 'required|integer|min:0|max:61',
            'graduation_year' => 'required|integer|min:2000|max:2017',
            'profession' => 'required|integer|min:0|max:5',
        ];
    }
}
