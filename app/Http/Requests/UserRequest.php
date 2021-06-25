<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'firstname' => 'required|min:2',
            'lastname'  => 'required|min:2',
            'age'       => 'required|numeric',
            'address'   => 'required',
            'contact_number'  => 'required|regex:/(09)[0-9]{9}/|max:11',
            'email'     => 'required|email|unique:users',
            'start_date' => 'required',
            'end_date' => 'required',
        ];
    }
}
