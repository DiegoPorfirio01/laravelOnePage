<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RodapeEndereco;

class RodapeEnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(RodapeEndereco $rodapeEndereco)
    {
        $rodapeEndereco->create([
            'title'=>'',
            'description'=>'',
        ]);
    }
}
