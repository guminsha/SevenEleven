<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call(EnderecosSeeder::class);
        $this->call(FuncionariosSeeder::class);
        $this->call(FilmesSeeder::class);
    }
    
}
