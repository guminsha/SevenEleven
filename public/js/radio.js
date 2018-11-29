function habilitarRadio(valor)
{
    if(valor == 1)
    {
        if(!document.getElementById('idMensal').cheked)
        {
            document.getElementById('idMensal').checked = true;
        } 
    }
    else if(valor == 2)
    {
        if(!document.getElementById('idTrimestral').checked)
        {
            document.getElementById('idTrimestral').checked = true;
        } 
    }
    else if(valor == 3)
    {
        if(!document.getElementById('idSemestral').checked)
        {
            document.getElementById('idSemestral').checked = true;
        } 
    }
    else
    {
        if(!document.getElementById('idAnual').checked)
        {
            document.getElementById('idAnual').checked = true;
        } 
    }
   
};