
<?php

$nome = $_POST['nome'];
$valor_hora = $_POST['valor_hora'];
$horas_trabalhadas = $_POST['horas_trabalhadas'];

$salarioBruto=0;
$IR=0;
$FGTS=0;
$sindicato=0;
$salarioLiquido=0;

if(empty($_POST['nome']) || empty($_POST['horas_trabalhadas']) || empty($_POST['valor_hora'])){
    echo "<div class='alert alert-danger' role='alert'>Há campos em branco. Insira novamente as informações.</div>";
    echo "<p><a href='index03.html'>Voltar</p>";
}
else
{
    echo "<ul class='listaFuncionario'>";
    echo "<li class='listaFuncionario'>Entrada - Funcionário</li>";
    echo "<li class='listaFuncionario'><b>Nome: </b>$nome</li>";
    echo "<li class='listaFuncionario'><b>Valor por hora</b>:R$ $valor_hora </li>";
    echo "<li class='listaFuncionario'><b>Total de Horas Tabalhadas: </b>$horas_trabalhadas horas</li></ul>";

}

//Salario bruto
$salarioBruto = $horas_trabalhadas * $valor_hora;

//IR
if ($salarioBruto <= 900.00)
{
    $IR=0;
}
if ($salarioBruto > 900 && $salarioBruto <= 1500)
{
    $IR=$salarioBruto * 5/100;
}

if ($salarioBruto > 1500 && $salarioBruto <= 2500)
{
    $IR=$salarioBruto * 10/100;
}
if($salarioBruto > 2500.00)
{
    $IR=$salarioBruto * 20/100;
}

//FGTS
$FGTS = $salarioBruto * 11/100;

//Sindicato
$sindicato = $salarioBruto *3/100;

//Salario liquido 
$salarioLiquido = $salarioBruto - $IR - $sindicato;

echo "<ul class='listaFuncionario'>";
echo "<li class='listaFuncionario'>Saída - Folha de Pagamento</li>";
echo "<li class='listaFuncionario'><b>Salário Bruto:</b> R$ $salarioBruto </li>";
echo "<li class='listaFuncionario'><b>Desconto IR: </b>R$ $IR </li>";
echo "<li class='listaFuncionario'><b>Desconto Sindicato : </b>R$ $sindicato </li>";
echo "<li class='listaFuncionario'><b>Desconto FGTS: </b>R$ $FGTS </li>";
echo "<li class='listaFuncionario'><b>Salário Líquido: </b>R$ $salarioLiquido </li></ul>";


?>