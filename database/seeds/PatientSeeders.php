<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PatientSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            [
                'id' => 1, 'prontuarioPatient' => 23.156, 'namePatient' => 'Alexadre Martins', 'sexoPatient' => 'male',
                'telPatient' => '(61) 98594-6655', 'typeQueryPatient' => 'Acute myocardial infarction', 'doctorNamePatient' => 'Dra. Marla Vinceti'
            ],
            [
                'id' => 2, 'prontuarioPatient' => 80.486, 'namePatient' => 'Anna Mestice', 'sexoPatient' => 'female',
                'telPatient' => '(61) 74234-6355', 'typeQueryPatient' => 'Diabetes', 'doctorNamePatient' => 'Dr. Marccos Silva'
            ],
            [
                'id' => 3, 'prontuarioPatient' => 56.159, 'namePatient' => 'Maverik Silva', 'sexoPatient' => 'male',
                'telPatient' => '(61) 94894-6355', 'typeQueryPatient' => 'Oncology Cytology', 'doctorNamePatient' => 'Dra. Linda Marlek'
            ],
            [
                'id' => 4, 'prontuarioPatient' => 90.736, 'namePatient' => 'Camila Glores', 'sexoPatient' => 'female',
                'telPatient' => '(62) 68954-6355', 'typeQueryPatient' => 'Clinical pathology', 'doctorNamePatient' => 'Dr. Marccos Silva'
            ],


        ]);
    }
}
