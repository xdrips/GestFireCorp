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
echo "<br>Motivo:";
 echo $_POST["motivo"];
 echo "<br>Tipo:";
 echo $_POST["tipo"];
echo "<br>Data:";
 echo $_POST["data"];

$codigo = $_POST["codigo"];
$bombeiro = $_POST["bombeiro"];
$motivo = $_POST["motivo"];
$tipo = $_POST["tipo"];
$data = $_POST["data"];

$conexao = mysql_connect('localhost','root','');
if ($conexao)
{
echo 'Ligação efectuada';
mysql_select_db("giveitchange" ,$conexao);
$texto = "insert into faltas value ('".$codigo."','".$bombeiro."','".$motivo."','".$tipo."','".$data."')";
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