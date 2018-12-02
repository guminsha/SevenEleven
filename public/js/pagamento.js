function showAndHideDiv()
{
    var cartao = document.getElementById("cartaoCredito");
    var boleto = document.getElementById("boletoBancario");

    cartao.style.display = "none";
    boleto.style.display = "none";

    if( $("#idBoleto").is(":checked") == true)
    {
        if (boleto.style.display === "none")
        {
            boleto.style.display = "block";
        }
    }
    else if( $("#idCartao").is(":checked") == true)
    {
        if (cartao.style.display === "none")
        {
            cartao.style.display = "block";
        }
    } 
}