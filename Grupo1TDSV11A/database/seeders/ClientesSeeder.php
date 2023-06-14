<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'Nombre' => 'Juan',
                'Apellido' => 'Pérez',
                'Fecha_Nac' => '1990-01-01',
            ],
            [
                'Nombre' => 'María',
                'Apellido' => 'González',
                'Fecha_Nac' => '1985-05-10',
            ],
            [
                'Nombre' => 'Carlos',
                'Apellido' => 'López',
                'Fecha_Nac' => '1998-12-15',
            ],
            [
                'Nombre' => 'Ana',
                'Apellido' => 'Ramírez',
                'Fecha_Nac' => '1992-07-22',
            ],
            [
                'Nombre' => 'Luis',
                'Apellido' => 'Hernández',
                'Fecha_Nac' => '1988-04-12',
            ],
            [
                'Nombre' => 'Laura',
                'Apellido' => 'Gómez',
                'Fecha_Nac' => '1995-09-30',
            ],
            [
                'Nombre' => 'Pedro',
                'Apellido' => 'Díaz',
                'Fecha_Nac' => '1983-03-05',
            ],
            [
                'Nombre' => 'Marta',
                'Apellido' => 'Luna',
                'Fecha_Nac' => '1991-11-18',
            ],
            [
                'Nombre' => 'Javier',
                'Apellido' => 'Sánchez',
                'Fecha_Nac' => '1997-02-25',
            ],
            [
                'Nombre' => 'Isabel',
                'Apellido' => 'Torres',
                'Fecha_Nac' => '1987-08-08',
            ],
            [
                'Nombre' => 'Roberto',
                'Apellido' => 'Ortega',
                'Fecha_Nac' => '1993-06-14',
            ],
            [
                'Nombre' => 'Carmen',
                'Apellido' => 'Vargas',
                'Fecha_Nac' => '1989-10-20',
            ],
        ];

        DB::table('clientes')->insert($data);
    }
}
