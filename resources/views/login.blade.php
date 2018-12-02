<!DOCTYPE html>
<html>
<head>
    <title>Login - Eleven Seven Locadora</title>
    <link href="{{asset('css/styleLogin.css')}}" rel="stylesheet" type="text/css" />
    <meta charset="utf-8"/> 
</head>
<body>
    @if(session('invalido'))
    <div class="alert">
        <strong>{{session('invalido')}}</strong>
    </div>
    @endif
    @if($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $erro)
        <p> {{ $erro }} </p>
        @endforeach
    </div>
    @endif
    <div id="divQuad">
        <img src="{{asset('imagens/logo.png')}}" alt="Logo" id="logo">
        <div id="divform" class="grid-container">
            <form action="{{route('validarLogin')}}" method="POST">
                {{ csrf_field() }}
                <input type="radio" value="user" class="grid-item userRadio" name="logintype" id="user" checked="true" /> <label for="user" class="grid-item userRadio"> CLIENTE </label>
                <input type="radio" value="adm" class="grid-item admRadio"  name="logintype" id="adm"/> <label for="adm" class="grid-item admRadio"> ADMINISTRAÇÃO</label>
                <br/>
                <br/>
                <div id="divLogin">
                    <label for="email" id="emailNome" class="grid-item">Email:</label>
                    <input type="email" id="email" name="email" placeholder="" class="grid-item"/>
                    <br/>
                    <label for="senha" class="grid-item">Senha:</label>
                    <input type="password" id="senha" name="senha" placeholder="" class="grid-item"/>
                </div>
                <div id="divLinks">
                    <i>
                        <a href="#" class="link grid-item" id="linkEsqueceu">Esqueceu seu e-mail ou senha?</a><br>
                        <a href="{{route('paginaCadUser')}}" class="link grid-item" id="linkNovo">Novo por aqui? Cadastre-se</a><br><br><br>
                    </i>
                </div>
                <input type="submit" class="btn-submit grid-item" value="Logar" />
            </form>
        </div>
    </div>
</body>
</html>