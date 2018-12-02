<!DOCTYPE html>
<html>
<head>
	<title>Página Inicial - Eleven Seven</title>
	<link href="{{asset('css/styleHome.css')}}" rel="stylesheet" type="text/css" />
	<meta charset="utf-8" />
</head>

<body>
<header>
	<ul>
	  <li><a class="active" href="#">Home</a></li>
	  <li><a href="#">Categorias</a></li>
	  <li><a href="#">Opções</a></li>
	  <li><a href="#">Suporte</a></li>
	  <li><a href="#">Sobre</a></li>
	  <li><a href="{{route('planosVip')}}">Ativar VIP</a></li>
	  <li id = "logout"><a href="{{route('logout')}}"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
	  <div id="divPesquisa">
		<form action="" method="get">
			<input type="text" name="pesquisa" id="inputPesq">
		  	<button type="submit" class="btnPesquisar">Pesquisar</button>
		</form>
	  </div>
	</ul>
	<div id="userNome">
		<p>Bem-Vindo {{session('usuario')}}!</p>
	</div>
</header>
	<div id="divCorpo">
		<div id="divVideo">
		<iframe width="720" height="480" src="https://www.youtube.com/embed/Ptq-Xr7ipM8?autoplay=1&controls=0&loop=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
		<div id="divDestaque">
			<div id="divDestaqueTexto">
			<h2>Filme em destaque</h2>
			</div>
		</div>
		<div id="divConteudoDestaque">
			<h1>Shazam!</h1>
			<p>Billy Batson (Asher Angel) tem apenas 14 anos de idade, mas recebeu de um antigo mago o dom de se transformar num super-herói adulto chamado Shazam (Zachary Levi). Ao gritar a palavra SHAZAM!, o adolescente se transforma nessa sua poderosa versão adulta para se divertir e testar suas habilidades. Contudo, ele precisa aprender a controlar seus poderes para enfrentar o malvado Dr.Thaddeus Sivana (Mark Strong).</p>
			<form action="#alugar">
				<button type="submit">Alugar</button> (R$10,00 por 7 dias)
			</form>
			<form action="#comprar">
				<button type="submit">Comprar</button> (R$25,00)
			</form>
			<form action="#assistir">
				<button type="submit" disabled="true">Assistir</button> (Ative sua conta vip!)
			</form>
		<hr style="margin-bottom: 1%" />
		<div id="divRecomendados">
			<div id="divRecomendadosTexto">
			<h2>Recomendados</h2>
			</div>
		</div>
			<div class="divFilme">
				<img src="imagens/circulodefogo2.jpg" alt="Capa" class="capaFilme">
				<h3>Circulo de Fogo</h3>
				<p>Filho de Stacker Pentecost, responsável pelo comando da rebelião Jaeger, Jake Pendergast era um promissor piloto do programa de defesa, mas abandonou o treinamento e entrou no mundo do crime. Quando uma nova ameaça aparece, Mako Mori assume o lugar que era do pai no comando do grupo Jaeger e precisa reunir uma série de pilotos. Ela procura o irmão Jake e decide lhe oferecer uma segunda chance para ajudar no combate e provar seu valor.</p>
				<form action="#alugar">
					<button type="submit">Alugar</button> (R$5,00 por 7 dias)
				</form>
				<form action="#comprar">
					<button type="submit">Comprar</button> (R$17,00)
				</form>
				<form action="#assistir">
					<button type="submit" disabled="true">Assistir</button> (Ative sua conta vip!)
				</form>
			</div>
			<hr style="margin-top: 6%" />
			<div class="divFilme">
				<img src="imagens/Yourname.jpg" alt="Capa" class="capaFilme">
				<h3>Your Name</h3>
				<p>Mitsuha é a filha do prefeito de uma pequena cidade, mas sonha em tentar a sorte em Tóquio. Taki trabalha em um restaurante em Tóquio e deseja largar o seu emprego. Os dois não se conhecem, mas estão conectados pelas imagens de seus sonhos.</p>
				<form action="#alugar">
					<button type="submit">Alugar</button> (R$7,00 por 7 dias)
				</form>
				<form action="#comprar">
					<button type="submit">Comprar</button> (R$20,00)
				</form>
				<form action="#assistir">
					<button type="submit" disabled="true">Assistir</button> (Ative sua conta vip!)
				</form>
			</div>
			<hr style="margin-top: 8%" />
			<div class="divFilme">
				<img src="imagens/AboutTime.jpg" alt="Capa" class="capaFilme">
				<h3>Questão de Tempo</h3>
				<p>Depois de descobrir que ele pode viajar no tempo, o jovem Tim Lake usa sua habilidade para ganhar o coração da mulher dos seus sonhos e salvar seu amigo de um desastre profissional.</p>
				<form action="#alugar">
					<button type="submit">Alugar</button> (R$2,00 por 7 dias)
				</form>
				<form action="#comprar">
					<button type="submit">Comprar</button> (R$10,00)
				</form>
				<form action="#assistir">
					<button type="submit" disabled="true">Assistir</button> (Ative sua conta vip!)
				</form>
			</div>
			<hr style="margin-top: 8%" />
		</div>
	</div>
	<footer>
		<p>“Copyright © 2018 | Rougert Brian Alexandre“</p>
	</footer>
</body>

</html>