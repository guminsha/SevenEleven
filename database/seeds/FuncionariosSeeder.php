<?php

use Illuminate\Database\Seeder;

class FuncionariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('funcionarios')->insert([
            'id_funcionario' => '1',
            'email' => 'adm@teste.com', 
            'nome' => 'admin',
            'senha' => '123',
            'data_nascimento' => '1990-10-10',
            'data_admissao' => '1990-10-10',
            'nivel_permissao' => '1',
            'sexo' => 'M',
            'telefone' => 'Alterar',
            'endereco_id' => '1',
        ]);
    
    }
}
