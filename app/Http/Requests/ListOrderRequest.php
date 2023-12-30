<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'status' => [
                'nullable'
            ],
            'customer_national_code' => [
                'nullable'
            ],
            'amount_min' => [
                'nullable'
            ],
            'amount_max' => [
                'nullable'
            ],
        ];
    }
}
