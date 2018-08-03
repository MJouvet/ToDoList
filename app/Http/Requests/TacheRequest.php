<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TacheRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Titre_Tache' => 'required|max:255', // titre de la tache 
            'Date_In_Tache' => 'required|date_format', //date de debut
            'Date_Out_Tache' => 'required|date_format' //date de fin

        ];
    }
}
