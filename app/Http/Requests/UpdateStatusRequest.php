<?php

namespace App\Http\Requests;
use BenSampo\Enum\Rules\EnumValue;
use App\Enums\TransactionStatus ;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStatusRequest extends FormRequest
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
            'status' => [
                'required',
                new  EnumValue(TransactionStatus::class, false),
            ],

            'transaction_id' => [
                'required',
                'exists:deposits,id',
            ],
        ];


        return $rules;

    }
}
