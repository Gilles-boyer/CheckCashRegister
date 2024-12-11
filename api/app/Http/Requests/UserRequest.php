<?php

namespace App\Http\Requests;

use App\Http\Requests\ModelRequest;


class UserRequest extends ModelRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
            // Récupérer l'ID de l'utilisateur à partir de la route, s'il est défini
            $userId = $this->route('user') ? $this->route('user')->id : null;
        return [
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'email' => 'required|string|email|max:255|unique:users,email,'. $userId,
            'admin' => 'boolean',
        ];
    }

}
