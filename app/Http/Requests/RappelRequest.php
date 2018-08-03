<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RappelRequest extends FormRequest
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
            'Titre_Rappel' => 'required|max:255', //titre du rappel
            'Date_Rappel' => 'required|date_format' // début du rappel
        ];
    }
}
