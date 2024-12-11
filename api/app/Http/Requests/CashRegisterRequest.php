<?php

namespace App\Http\Requests;

use App\Http\Requests\ModelRequest;

class CashRegisterRequest extends ModelRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'location_id' => 'required|exists:locations,id',
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'comment' => 'nullable|string',
        ];
    }
}
