<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RodapeContato;

class RodapeContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(RodapeContato $rodapeContato)
    {
        $rodapeContato->create([
            'title'=>'',
            'description'=>'',
        ]);
    }
}
