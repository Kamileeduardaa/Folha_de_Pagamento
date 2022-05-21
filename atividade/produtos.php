
<?php
$celular = $_POST['celular'];
$notebook = $_POST ['notebook'];
$computador = $_POST ['computador'];
$menor = $celular;

if($notebook < $menor)
{
    $menor = $notebook;
    
}
if($computador < $menor)
{
    $menor = $computador;

}

echo "Resultado";
echo "<br>O produto mais barato é o de =  R$ $menor ";


?>