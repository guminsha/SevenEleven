<?php

use Illuminate\Database\Seeder;

class FilmesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filmes')->insert([
            'id_filme' => '1',
            'titulo' => 'Shazam!', 
            'classificacao' => '14',
            'sinopse' => 'Billy Batson (Asher Angel) tem apenas 14 anos de idade, mas recebeu de um antigo mago o dom de se transformar num super-herói adulto chamado Shazam (Zachary Levi). Ao gritar a palavra SHAZAM!, o adolescente se transforma nessa sua poderosa versão adulta para se divertir e testar suas habilidades. Contudo, ele precisa aprender a controlar seus poderes para enfrentar o malvado Dr.Thaddeus Sivana (Mark Strong).',
            'elenco' => 'Zachary Levi, Asher Angel, Mark Strong, Jack Dylan Grazer, Grace Fulton, Ian Chen, Faithe Herman, Cooper Andrews.',
            'categoria' => 'Ação',
            'preco_aluguel' => '10.00',
            'preco_venda' => '25.00',
            'disponibilidade' => '1',
            'capa_filme' => '1',
            'upload' => '1',
            'funcionario_id' => '1'
        ]);

        DB::table('filmes')->insert([
            'id_filme' => '2',
            'titulo' => 'Circulo de fogo', 
            'classificacao' => '14',
            'sinopse' => 'Filho de Stacker Pentecost, responsável pelo comando da rebelião Jaeger, Jake Pendergast era um promissor piloto do programa de defesa, mas abandonou o treinamento e entrou no mundo do crime. Quando uma nova ameaça aparece, Mako Mori assume o lugar que era do pai no comando do grupo Jaeger e precisa reunir uma série de pilotos. Ela procura o irmão Jake e decide lhe oferecer uma segunda chance para ajudar no combate e provar seu valor.',
            'elenco' => 'Charlie Hunnam, Idris Elba, Rinko Kikuchi e outros.',
            'categoria' => 'Ação',
            'preco_aluguel' => '5.00',
            'preco_venda' => '17.00',
            'disponibilidade' => '1',
            'capa_filme' => '1',
            'upload' => '1',
            'funcionario_id' => '1'
        ]);

        DB::table('filmes')->insert([
            'id_filme' => '3',
            'titulo' => 'Your Name', 
            'classificacao' => '12',
            'sinopse' => 'Mitsuha é a filha do prefeito de uma pequena cidade, mas sonha em tentar a sorte em Tóquio. Taki trabalha em um restaurante em Tóquio e deseja largar o seu emprego. Os dois não se conhecem, mas estão conectados pelas imagens de seus sonhos.',
            'elenco' => 'Ryûnosuke Kamiki, Mone Kamishiraishi, Masami Nagasawa e outros.',
            'categoria' => 'Animação',
            'preco_aluguel' => '7.00',
            'preco_venda' => '20.00',
            'disponibilidade' => '1',
            'capa_filme' => '1',
            'upload' => '1',
            'funcionario_id' => '1'
        ]);

        DB::table('filmes')->insert([
            'id_filme' => '4',
            'titulo' => 'Questão de Tempo', 
            'classificacao' => '12',
            'sinopse' => 'Depois de descobrir que ele pode viajar no tempo, o jovem Tim Lake usa sua habilidade para ganhar o coração da mulher dos seus sonhos e salvar seu amigo de um desastre profissional.',
            'elenco' => 'Domhnall Gleeson, Rachel McAdams, Bill Nighy e outros.',
            'categoria' => 'Drama',
            'preco_aluguel' => '2.00',
            'preco_venda' => '10.00',
            'disponibilidade' => '1',
            'capa_filme' => '1',
            'upload' => '1',
            'funcionario_id' => '1'
        ]);
    }
}
