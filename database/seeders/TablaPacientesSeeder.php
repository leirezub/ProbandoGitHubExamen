<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paciente;
use App\Models\Doctor;
use DateTime;

class TablaPacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $paciente = new Paciente;
        $paciente->id=1;
        $paciente->nombre="Leire";
        $paciente->apellidos="R";
        $paciente->dni="123456789A";
        $paciente->fecha_nacimiento=new DateTime('11/07/1999');
        $paciente->vacunado = true;
        $paciente->doctor_id=null;
        $paciente->save();


        $doctor = new Doctor;
        $doctor->id=1;
        $doctor->nombre="Adil";
        $doctor->apellidos="Mohand";
        $doctor->numpacientes=0;
        $doctor->save();

    }
}
