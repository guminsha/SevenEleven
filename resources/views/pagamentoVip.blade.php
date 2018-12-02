<!DOCTYPE html>
    <html>
    <head>
        <title>Ativar VIP - Eleven Seven</title>
        <link href="{{asset('css/stylePagamentoVip.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta charset=“utf-8”/>
    </head>
    <body>
        <header>
        </header>
        <div id="divCorpo">
            <div class="textoComum">
                <p>Olá, {{session('usuario')}}! Aqui estão mais informações sobre a compra:</p>
            </div>
            <div>
                <h4>Plano Selecionado: </h4>
                <h5>
                        {{$infoPlano['plano']}}
                </h5>
                <h4>Preço:</h4>
                <h5>
                        R${{$infoPlano['preco']}}
                </h5>
                <h4>Desconto:</h4>
                <h5>
                        R${{$infoPlano['desconto']}}
                </h5>
                <h4>Total da compra:</h4>
                <h5>
                        R${{$infoPlano['total_compra']}}
                </h5>
            </div>
            <h4 id="forma">Escolha a forma de pagamento: </h4>

            <div id="radioFormaPagamento">
                <input type="radio" id="idBoleto" name="formaPagamento"onclick="showAndHideDiv()"/>
                <label for="idBoleto" class="textoComum">Boleto</label>

                <input type="radio" id="idCartao" name="formaPagamento" onclick="showAndHideDiv()"/>
                <label for="idCartao" class="textoComum">Cartão de Crédito</label>
            </div>

            <div id="boletoBancario">
                <form action="{{route('efetuadoVip')}}" method="POST">
                @csrf
                <div id="divButtonBol">
                    <button class="btn btn-primary" type="submit">Gerar Boleto</button>
                </div>
                </form>
            </div>

            <div id="cartaoCredito">
                <form action="{{route('efetuadoVip')}}" method="POST">
                @csrf
                        <h4> Informe os dados do cartão:</h4>
                        <div class="form-row">
                            <div class="form-group col-md-2">    
                                <label for="cartao" class="textoComum2">Número do cartão:</label>
                                <input type="text" class="form-control" id="cartao"  placeholder="XXXX XXXX XXXX XXXX">
                            </div>                         
                            <div class="form-group col-md-2">
                                <label for="mesCartao" class="textoComum2">Data de validade:</label>
                                <input type="text" class="form-control" id="mesCartao"  placeholder="MM" maxlength="2">
                                <input type="text" class="form-control" id="anoCartao" placeholder="AAAA" minlength="4" maxlength="4">
                            </div>
                        </div>
                        <div id="tirarEspaco">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="donoCartao" class="textoComum2">Nome do titular do cartão:</label>
                                    <input type="text" class="form-control" id="donoCartao" placeholder="Ex.: CARLOS A F DE OLIVEIRA">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="codigoCartao" class="textoComum2">Código de segurança:</label>
                                    <input type="text" class="form-control" id="codigoCartao" minlength="3" maxlength="3">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="parcelas"class="textoComum2">Quantidade de parcelas:</label><br />
                                <select class="custom-select" id="tipoParcela">
                                    @foreach($tipoParcelas as $parcela)
                                    <option> {{$parcela}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div id="divButtonCart">
                            <button type="submit" class="btn btn-primary">Finalizar Compra</button>
                        </div>
                    </form>
            </div>
        </div>
        <footer>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{asset('js/pagamento.js')}}"> </script>
    </body>
    </html>