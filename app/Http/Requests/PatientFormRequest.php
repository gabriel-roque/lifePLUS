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
            'prontuarioPatient' => 'required|min:1|max:6|unique:patients',
            'namePatient' => 'required|min:15|max:50',
            'sexoPatient' => 'required',
            'telPatient' => 'required|max:15|min:15|unique:patients',
            'typeQueryPatient' => 'required|max:50',
            'doctorNamePatient' => 'required|max:50|min:15'
        ];
    }
}
