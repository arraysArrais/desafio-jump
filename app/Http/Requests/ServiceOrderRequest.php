<?php

namespace App\Http\Requests;

use App\Rules\Placa;
use Illuminate\Foundation\Http\FormRequest;

class ServiceOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'vehiclePlate' => ['required', new Placa()],
            'entryDateTime' => 'date_format:Y-m-d H:i:s',
            'exitDateTime' => 'date_format:Y-m-d H:i:s',
            'priceType' => 'required',
            'price' => 'decimal:2',
            'user_id' => 'required'
        ];
    }
}
