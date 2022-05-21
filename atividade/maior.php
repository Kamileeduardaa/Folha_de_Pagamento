
<?php
$num1 = $_POST['num1'];
$num2 = $_POST ['num2'];
$num3 = $_POST ['num3'];
$maior=0;
if($num1>$maior)
{
    $maior=$num1;
}
if($num2>$maior)
{
    $maior=$num2;

}
if ($num3>$maior)
{
    $maior=$num3;
}

echo "<div class='resultado'>";
echo "--Resultado--";
echo "<br>O maoir número digitado é = $maior</div>";
?>