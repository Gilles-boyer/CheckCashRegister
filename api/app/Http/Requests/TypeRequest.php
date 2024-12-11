<?php

namespace App\Http\Requests;

use App\Http\Requests\ModelRequest;


class TypeRequest extends ModelRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|unique:types,name|max:255|'
        ];
    }
}
