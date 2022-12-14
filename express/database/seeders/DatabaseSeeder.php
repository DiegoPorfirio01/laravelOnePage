<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HeaderSeeder::class);
        $this->call(RodapeContatoSeeder::class);
        $this->call(RodapeEnderecoSeeder::class);
        $this->call(RodapeHorarioSeeder::class);
    }
}
