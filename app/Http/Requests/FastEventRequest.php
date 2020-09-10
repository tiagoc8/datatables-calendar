<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FastEventRequest extends FormRequest
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
        return [
            'title' => 'required|min:3', 
            'start' => 'date_format:H:i:s|before:end',
            'end' => 'date_format:H:i:s|after:start',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Preencha o campo título',
            'title.min' => 'Título necessita de pelo menos 3 caracteres!',
            'start.date_format' => 'Preencha uma hora inicial válida',
            'start.before' => 'A hora de inicio deve ser anterior à de fim',
            'end.date_format' => 'Preencha uma hora final válida',
            'end.after' => 'A hora de fim deve ser posterior à de inicio',
        ];

    }
}
