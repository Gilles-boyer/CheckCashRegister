<?php

namespace App\Http\Requests;

class TransactionRequest extends ModelRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'type_id' => 'required|exists:types,id',
            'invoice' => 'boolean',
            'invoice_number' => 'nullable|string|max:255',
            'amount' => 'required|numeric|min:0',
            'quantity' => 'integer|min:1',
            'payment_terminal' => 'nullable|string|max:255',
            'cash_register_id' => 'required|exists:cash_registers,id',
        ];
    }
}
