<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InmuebleStoreRequest extends FormRequest
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
            'superficie' => 'required',
            'descripcion' => 'required|min:0',
            'amoblado' => 'required|numeric',
            'categoria.idCategoria' => 'required|numeric',
            'idTipo' => 'required|numeric',
            'idZona' => 'required|numeric',
        ];
    }

    public function messages(){
        return [
            'superficie' => 'Se requiere una superficie',
            'descripcion' => 'Se requiere una descripcion',
            'amoblado' => 'Se requiere conocer si es amoblado',
            'idCategoria' => 'Se requiere una categoria',
            'idTipo' => 'Se requiere un tipo de oferta',
            'idZona' => 'Se requiere una zona'
        ];
    }
}
