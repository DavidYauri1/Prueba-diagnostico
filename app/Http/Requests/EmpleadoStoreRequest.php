<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        
        return [
            'nombres' => 'required',
            'apellidos' => 'required',
            'Dni' => ['required','unique:empleados,Dni', 'min:8','max:8'],
            'email' => 'required|email|unique:empleados',
            'area' => 'required',
            'cargo' => 'required',
            'local' => 'required',
            'nacimiento' => ['required'],
            'inicio' => ['required','before_or_equal:fin'],
            'fin' => ['required','after_or_equal:inicio'],
            'type' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombres.required' => 'Campo nombre es requerido ',

            'apellidos.required' => 'Campo Apellidos es requerido ',
            'Dni.required' => 'Dni es requerido requerido ',
            'email.required' => 'El nombre es requerido ',

            'area.required' => 'El campo area es requerido ',

            'cargo.required' => 'El campo cargo es requerido ',

            'local.required' => 'El campo local es requerido ',

            'nacimiento.required' => 'Fecha de Nacimiento es requerido ',

            'inicio.required' => 'El campo Inicio de Contrato requerido ',
            'fin.required' => 'El campo Fin de Contrato es  requerido ',
            'type.required' => 'El campo contrato es  requerido ',



        ];
    }
}
