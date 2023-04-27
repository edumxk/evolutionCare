<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\FormularioRule;

class FormularioStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'paciente' => 'required',
            'enfermeiro' => 'required',
            'tecnico' => 'required',
            'evolucao' => ['required',new FormularioRule],
            'medico' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'paciente.required' => 'O nome do paciente é obrigatório',
            'enfermeiro.required' => 'O nome do enfermeiro é obrigatório',
            'tecnico.required' => 'O nome técnico de enfermagem é obrigatório',
            'evolucao.required' => 'A evolução é obrigatório',
            'medico.required' => 'O nome do médico é obrigatório'
        ];
    }
}
