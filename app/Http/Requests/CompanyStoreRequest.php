<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyStoreRequest extends FormRequest
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
            'company' => 'required|string|min:1',
            'full_name' => 'required|string|min:1',
            'website' => 'required|string|min:1',
            'address' => 'required|string|min:1',
            'city' => 'required|string|min:1',
            'state' => 'required|string|min:1',
            'zip' => 'required|string|digits:5',
            'country' => 'required|string|min:1',
            'phone' => 'required|string|min:1',
            'email' => 'required|email|min:1',
        ];
    }
}

