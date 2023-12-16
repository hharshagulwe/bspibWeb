<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ValidateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return  [
            'email' => [
                'required_without_all:phone',
                'prohibits:phone'
            ],
            'phone' => [
                'required_without_all:email',
                'prohibits:email'
            ]
            
        ];
      
    }
}
