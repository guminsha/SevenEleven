<!DOCTYPE html>
<html>
<head>
    <title>Gerenciamento - Eleven Seven</title>
	<link href="{{asset('css/styleGerenciamento.css')}}" rel="stylesheet" type="text/css" />
	<meta charset="utf-8" />
</head>
<body>
    <header>
    </header>
    <div id="supOpcoes">
        <a href="/funcionario/cadastrar"><img src="../imagens/cadastrarFuncionario.png" class="gerenciamentoLink"></a>
        <a href="/filme/cadastrar"><img src="../imagens/cadastrarFilme.png" class="gerenciamentoLink"></a>
        <a href="#"><img src="../imagens/realizarSuporte.png" class="gerenciamentoLink"></a>
        <a href="{{route('logout')}}"><img src="../imagens/logoutImg.png" class="gerenciamentoLink"></a>
    </div>
    <footer>
    </footer>
</body>
</html>