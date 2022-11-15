<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
        $rules = [
            'name'=>[
                'required',
                'string',
            ],
            'email'=>[
                'required',
                'string',
            ],
            'phone_number'=>[
                'string',
                'nullable',
            ],
            'country'=>[
                'string',
                'nullable',
            ],
            'city'=>[
                'nullable',
                'string',
            ],
            'zipcode'=>[
                'nullable',
                'string',
            ],

            'address'=>[
                'nullable',
                'string',
            ],
            'bitcoin_address'=>[
                'nullable',
                'string',
            ],
            'eth_address'=>[
                'nullable',
                'string',
            ],
            'perfect_money_address'=>[
                'nullable',
                'string',
            ],

        ];

        return $rules;
    }
}
