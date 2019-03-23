<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientFormRequest extends FormRequest
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
            'prontuarioPatient' => 'required|min:5|max:5',
            'namePatient' => 'required|min:15|max:50',
            'sexoPatient' => 'required',
            'telPatient' => 'required|max:11|min:11',
            'typeQueryPatient' => 'required|max:50',
            'doctorNamePatient' => 'required|max:50|min:15'
        ];
    }
}
