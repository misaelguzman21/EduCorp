<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventoRequest extends FormRequest
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
            
                'nombre' => 'required',
                'siglas' => 'required',
                'descripcion' => 'required',
                'areas' => 'required',
                'capacidad' => 'required|numeric',
                'duracion' => 'required|numeric',
                'costo' => 'required|numeric',
                'localizacion' => 'required|',
    
                
        ];
    }
}