<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Filme - Eleven Seven</title>
    <link href="{{asset('css/style3.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset=“utf-8”/> 
</head>
<body>
    @if($errors->any())
    <div class="dif">
        <strong>Erro ao cadastrar Filme!</strong>
        @foreach($errors->all() as $erro)
        <p> {{ $erro }} </p>
        @endforeach
    </div>
    @endif

	<div id="formulario">
		<h1>Cadastro Filme</h1>
        <div id="divCampos">
            <form action="{{route('addFilme')}}" method="post" enctype="multipart/form-data">
            @csrf

                <div class="form-group col-md-4">
                    <label for="inputTitulo">Título:</label>
                    <input type="text" class="form-control" id="inputTitulo" placeholder="Título" name="titulo">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputClassificacao">Classificação:</label>
                    <select id="inputClassificacao" name="classificacao" class="form-control">
                        <option selected>Escolher...</option>
                        <option>Livre</option>
                        <option>10</option>
                        <option>12</option>
                        <option>14</option>
                        <option>16</option>
                        <option>18</option>
                    </select>
                </div>
                <div id="divSinop">
                    <div class="form-group">
                        <label for="inputSinopse">Sinopse:</label><br>
                        <textarea style="resize: none" rows="4" cols="50" id="inputSinopse" name="sinopse"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="inputElenco">Elenco:</label><br>
                        <textarea style="resize: none" rows="2" cols="50" id="inputElenco" name="elenco"></textarea>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputCategoria">Categoria:</label>
                    <select id="inputCategoria" class="form-control" name="categoria">
                        <option selected>Escolher...</option>
                        <option>Ação</option>
                        <option>Aventura</option>
                        <option>Comedia</option>
                        <option>Drama</option>
                        <option>Musical</option>
                        <option>Terror</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputAluguel">Preço do Aluguel:</label>
                    <input type="text" class="form-control" id="inputAluguel" placeholder="9.99" name="precoAluguel">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputVenda">Preço da Venda:</label>
                    <input type="text" class="form-control" id="inputVenda" placeholder="9.99" name="precoVenda">
                </div>
                <div id="divRadio">
                    <label for="">Disponibilidade:</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="disponibilidade" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Disponível</label>
					</div>
					<div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="disponibilidade" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Indisponível</label>
					</div>
				</div>
            </div>
            <div id="divImagem">
                <label for="inputCapa">Imagem da capa:</label>
                <input type="file" class="form-control" id="inputCapa" name='capaFilme'>
            </div>
            <div id="divButtonCad">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>