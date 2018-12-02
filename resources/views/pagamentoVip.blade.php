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
            <p>Olá, {{session('usuario')}}!</p>
            

            <div>
                <h1>Resumo da Compra: </h1>
                <h2> Descrição da compra: </h2>
                <h4>
                        {{$infoPlano['descricao']}}
                </h4>
                <h2> Preço Unitario </h2>
                <h4>
                        R${{$infoPlano['preco_unitario']}}
                </h4>
                <h2>Desconto: </h2>
                <h4>
                        R${{$infoPlano['desconto']}}
                </h4>
                <h2> Preço Total </h2>
                <h4>
                        R${{$infoPlano['preco_final']}}
                </h4>
            </div>
            <h1>Escolha a forma de pagamento: </h1>

            <div id="radioFormaPagamento">
                <input type="radio" id="idBoleto" name="formaPagamento"onclick="showAndHideDiv()"/>
                <label for="idBoleto">Boleto</label>

                <input type="radio" id="idCartao" name="formaPagamento" onclick="showAndHideDiv()"/>
                <label for="idCartao">Cartão de Crédito</label>
            </div>

            <div id="boletoBancario">
                <form action="{{route('efetuadoVip')}}" method="POST">
                @csrf
                <h1> Clique no botão para gerar o boleto</h1>
                <button class="btn btn-primary" type="submit">Gerar Boleto</button>
                </form>
            </div>

            <div id="cartaoCredito">
                <form action="{{route('efetuadoVip')}}" method="POST">
                @csrf
                        <h1> Informe os dados do cartão</h1>
                        <div class="form-row">
                            
                            <div class="form-group col-md-3">    
                                <label for="cartao">Número do cartão:</label>
                                <input type="text" class="form-control" id="cartao"  placeholder="Digite o número do cartão">
                            </div>                         

                            <div class="form-group col-md-3">
                                <label for="mesCartao">Data de validade:</label>
                                <input type="number" class="form-control" id="mesCartao"  placeholder="MM" min="1" max="12">
                                <input type="number" class="form-control" id="anoCartao" placeholder="AA">
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="donoCartao">Nome do dono do cartão:</label>
                                <input type="text" class="form-control" id="donoCartao" placeholder="Digite o nome do dono do cartão">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="codigoCartao">Código de segurança:</label>
                                <input type="number" class="form-control" id="codigoCartao" placeholder="Código de segurança" min="0" maxlength="3" size="4">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="parcelas">Escolha a quantidade de parcelas:</label>
                            <select class="custom-select" id="tipoParcela">
                                @foreach($tipoParcelas as $parcela)
                                <option> {{$parcela}} </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Finalizar Compra</button>
                    </form>
            </div>
        </div>
        <footer>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{asset('js/pagamento.js')}}"> </script>
    </body>
    </html>