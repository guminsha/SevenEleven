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
            <img src="{{asset('imagens/planoMensal.png')}}" alt="Mensal" id="mensal" width=20% onclick="habilitarRadio(1)">
            <img src="{{asset('imagens/planoTrimestral.png')}}" alt="Mensal" id="trimestral" width=20% onclick="habilitarRadio(2)">
            <img src="{{asset('imagens/planoSemestral.png')}}" alt="Mensal" id="semestral" width=20% onclick="habilitarRadio(3)">
            <img src="{{asset('imagens/planoAnual.png')}}" alt="Mensal" id="anual" width=20% onClick="habilitarRadio(4)">
        </div>
        <div id="radioPlanos">
            <input type="radio" id="idMensal" value="mensal" name="plano" checked="true" class="radioMensal"/>
            <label for="idMensal" class="radioMensal" id="labelMensal">Plano Bronze !</label>

            <input type="radio" id="idTrimestral" value="trimestral" name="plano" class="radioTrimestral"/>
            <label for="idTrimestral" class="radioTrimestral" id="labelTrimestral">Plano Prata !</label>

            <input type="radio" id="idSemestral" value="semestral" name="plano" class="radioSemestral"/>
            <label for="idSemestral" class="radioSemestral" id="labelSemestral">Plano Ouro !</label>
            
            <input type="radio" id="idAnual" value="anual" name="plano" class="radioAnual"/>
            <label for="idAnual" class="radioAnual" id="labelAnual">Plano Platina !</label>
        </div>
        <div id="divDesconto">
            <label for="desconto" id="descontoNome">Cupom de Desconto:</label>
            <input type="text" id="desconto" name="desconto" placeholder=""/>
        </div>
        <input type="submit" class="btn-submit grid-item" value="Prosseguir" />
    </form>

    <script type="text/javascript" src="{{asset('js/radio.js')}}"> </script>
</body>
</html>