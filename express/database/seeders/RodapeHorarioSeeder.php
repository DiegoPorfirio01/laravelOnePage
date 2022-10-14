<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RodapeHorario;

class RodapeHorarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(RodapeHorario $rodapeHorario)
    {
        $rodapeHorario->create([
            'title'=>'',
            'description'=>'',
        ]);
    }
}
