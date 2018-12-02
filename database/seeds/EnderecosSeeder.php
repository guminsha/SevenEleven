<?php

use Illuminate\Database\Seeder;

class EnderecosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enderecos')->insert([
            'id_endereco' => '1',
            'cep' => '57057-000', 
            'cidade' => '...',
            'pais' => '...',
            'estado' => '...',
            'complemento' => 'Number two'
        ]);
    
    }
}
