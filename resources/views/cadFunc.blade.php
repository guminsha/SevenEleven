<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Funcionário - Eleven Seven</title>
    <link href="{{asset('css/style5.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset=“utf-8”/>
</head>
<body>
    <div id="formulario">
        <h1>Cadastro Funcionário</h1>
        <i><p>Campos com '*' são campos de preenchimento obrigatório.</p></i>
        <form action="" method="post">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputNome">Nome:</label>
                    <input type="text" class="form-control" id="inputNome" placeholder="Nome" required="true">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail">Email:</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" required="true">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputPassword">Senha:</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Senha" required="true">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputConfirmPassword">Confirmar Senha:</label>
                    <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Confirmar Senha" required="true">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputDataNasci">Data de Nascimento:</label>
                    <input type="date" class="form-control" id="inputDataNasci" required="true">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputDataAdmi">Data de Admissão:</label>
                    <input type="date" class="form-control" id="inputDataAdmi" required="true">
                </div>
            </div>
            <div id="divRadio">
                <label for="">Sexo:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="true">
                    <label class="form-check-label" for="inlineRadio1">Masculino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Feminino</label>
                </div>
            </div>
            <div id="divTel">
                <div class="form-group">
                    <label for="inputPhone">Telefone:</label>
                    <input type="text" class="form-control" id="inputPhone" placeholder="Telefone">
                </div>
            </div>
            <h3>Endereço:</h3>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="inputCEP">CEP:</label>
                    <input type="text" class="form-control" id="inputCEP" placeholder="57057-150" required="true">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputCountry">País:</label>
                    <select id="inputCountry" class="form-control">
                        <option selected>Escolher...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputState">Estado:</label>
                    <select id="inputState" class="form-control">
                        <option selected>Escolher...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCity">Cidade:</label>
                    <select id="inputCity" class="form-control">
                        <option selected>Escolher...</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputComp">Complemento:</label>
                    <input type="text" class="form-control" id="inputComp" placeholder="nº992 vizinho ao Banco Itaú" required="true">
                </div>
            </div>
            <div id="divButtonCad">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</body>
</html>