<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Patient extends Model
{

    public static function storePadient($request)
    {
        $patient = new Patient();
        if(isset($patient))
        {
            $patient->prontuarioPatient = $request->input('prontuarioPatient');
            $patient->namePatient = $request->input('namePatient');
            $patient->sexoPatient = $request->input('sexoPatient');
            $patient->telPatient = $request->input('telPatient');
            $patient->typeQueryPatient = $request->input('typeQueryPatient');
            $patient->doctorNamePatient = $request->input('doctorNamePatient');
            $patient->save();
            return true;
        }else{
            return false;
        }

    }

    public static function updatePatient($request, $id)
    {
        $patient = Patient::find($id);
        if (isset($patient))
        {
            $patient->prontuarioPatient = $request->input('prontuarioPatient');
            $patient->namePatient = $request->input('namePatient');
            $patient->sexoPatient = $request->input('sexoPatient');
            $patient->telPatient = $request->input('telPatient');
            $patient->typeQueryPatient = $request->input('typeQueryPatient');
            $patient->doctorNamePatient = $request->input('doctorNamePatient');
            $patient->save();
            return true;

        }else{
            return false;
        }
    }

    public static function deletePatient($id)
    {
        $patient = Patient::find($id);
        if(isset($patient))
        {
            $patient->delete($id);
            return true;
        }else{
            return false;
        }
    }
}
