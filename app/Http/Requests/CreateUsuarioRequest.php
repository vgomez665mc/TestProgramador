<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUsuarioRequest extends FormRequest
{
    protected $reglas = [
        'nombre' => 'required|regex:/^[\pL\s]+$/u|max:100',
        'correo' => 'required|email|unique:users',
        'cedula' => 'required|integer|unique:users|digits:6',

    ];
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
        return $this->reglas;
    }
}
