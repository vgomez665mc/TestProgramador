<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuarioRequest extends CreateUsuarioRequest
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
        $this->reglas['cedula'] = "integer|digits:6|required|unique:users,cedula,{$this->user->id},id";
        $this->reglas['correo']  = "required|unique:users,correo,{$this->user->id},id";
        return $this->reglas;


    }
}
