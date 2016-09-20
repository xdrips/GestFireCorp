<html>
<head>
<title> Registar Disponibilidade </title>
</head>
<body>
Dados Registados
<?php
 echo "<br>Código:";
 echo $_POST['codigo'];
echo "<br>Bombeiro:";
 echo $_POST["bombeiro"];
echo "<br>Mês:";
 echo $_POST["mes"];
 echo "<br>Dia:";
 echo $_POST["dia"];
echo "<br>Disponibilidade:";
 echo $_POST["disponibilidade"];

$codigo = $_POST["codigo"];
$bombeiro = $_POST["bombeiro"];
$mes = $_POST["mes"];
$dia = $_POST["dia"];
$disponibilidade = $_POST["disponibilidade"];

$conexao = mysql_connect('localhost','root','');
if ($conexao)
{
echo 'Ligação efectuada';
mysql_select_db("giveitchange" ,$conexao);

$texto = "UPDATE disponibilidades set nmecanografico='".$bombeiro."', mes='".$mes."', dia='".$dia."' where codigo ='".$codigo."'";




$resultado = mysql_query($texto);
}else
{
 echo 'Erro de ligação';
}
mysql_close($conexao);

?>
<p><a href=area_reservada_admin.php> Voltar</a></p>
</body>
</html>