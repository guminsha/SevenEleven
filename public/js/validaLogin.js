function validarLogin()
{
	var login = document.getElementById("email").value;
	var senha = document.getElementById("senha").value;
	if(login == 1 && senha == 1)
	{
		location.href = "pagInicial.html";
	}
	else{
		alert("E-mail e/ou senha incorretos");
	}
}