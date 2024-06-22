<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('persona')->insert([
            [
                'cPerApellido' => 'Carranza',
                'cPerNombre' => 'Orinson',
                'cPerDireccion' => 'Covicorti Mz LL Lote 4',
                'dPerFecNac' => '2000-12-25',
                'nPerEdad' => 23,
                'nPerSueldo' => 20000,
                'cPerRnd' => 'abc123xyz',
                'nPerEstado' => '1',
            ],
            [
                'cPerApellido' => 'Torres',
                'cPerNombre' => 'Jean',
                'cPerDireccion' => 'Avenida America Sur 742',
                'dPerFecNac' => '1999-05-22',
                'nPerEdad' => 34,
                'nPerSueldo' => 3000.75,
                'cPerRnd' => 'def456uvw',
                'nPerEstado' => '1',
            ],
            [
                'cPerApellido' => 'Grados',
                'cPerNombre' => 'Carlos',
                'cPerDireccion' => 'Av. Larco 456',
                'dPerFecNac' => '1985-08-10',
                'nPerEdad' => 39,
                'nPerSueldo' => 2800.00,
                'cPerRnd' => 'ghi789rst',
                'nPerEstado' => '1',
            ],
            [
                'cPerApellido' => 'Lopez',
                'cPerNombre' => 'Ana',
                'cPerDireccion' => 'La Esperanza 789',
                'dPerFecNac' => '2000-11-30',
                'nPerEdad' => 23,
                'nPerSueldo' => 2200.25,
                'cPerRnd' => 'jkl012mno',
                'nPerEstado' => '1',
            ],
            [
                'cPerApellido' => 'Martinez',
                'cPerNombre' => 'Luis',
                'cPerDireccion' => 'Av. America Oeste 321',
                'dPerFecNac' => '1995-03-18',
                'nPerEdad' => 29,
                'nPerSueldo' => 3100.80,
                'cPerRnd' => 'pqr345stu',
                'nPerEstado' => '1',
            ],
        ]);
    }
}
