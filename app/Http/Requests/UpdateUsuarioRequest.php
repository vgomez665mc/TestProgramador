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
        $this->reglas['cedula'] = "required|unique:users,cedula,{$this->users->id},id";
        $this->reglas['email']  = "required|unique:users,email,{$this->users->id},id";
        return $this->reglas;


    }
}
