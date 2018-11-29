<!DOCTYPE html>
<html>
<head>
    <title>Planos VIP - Eleven Seven</title>
    <link href="{{asset('css/style6.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset=“utf-8”/>
</head>
<body>
    <form action="{{route('pagamentoVip')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div id="planos">
            <img src="{{asset('imagens/planoMensal.png')}}" alt="Mensal" id="mensal" width=20%>
            <img src="{{asset('imagens/planoTrimestral.png')}}" alt="Mensal" id="trimestral" width=20%>
            <img src="{{asset('imagens/planoSemestral.png')}}" alt="Mensal" id="semestral" width=20%>
            <img src="{{asset('imagens/planoAnual.png')}}" alt="Mensal" id="anual" width=20%>
        </div>
        <div id="radioPlanos">
            <input type="radio" valeu="mensal" name="plano" checked="true" class="radioMensal"/><label for="mensal" class="radioMensal" id="labelMensal">Plano Bronze !</label>
            <input type="radio" valeu="trimestral" name="plano" class="radioTrimestral"/><label for="trimestral" class="radioTrimestral" id="labelTrimestral">Plano Prata !</label>
            <input type="radio" valeu="semestral" name="plano" class="radioSemestral"/><label for="semestral" class="radioSemestral" id="labelSemestral">Plano Ouro !</label>
            <input type="radio" valeu="anual" name="plano" class="radioAnual"/><label for="anual" class="radioAnual" id="labelAnual">Plano Platina !</label>
        </div>
        <div id="divDesconto">
            <label for="desconto" id="descontoNome">Cupom de Desconto:</label>
            <input type="text" id="desconto" name="desconto" placeholder=""/>
        </div>
        <input type="submit" class="btn-submit grid-item" value="Prosseguir" />
    </form>
</body>
</html>