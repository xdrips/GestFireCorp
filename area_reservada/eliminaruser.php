<html>
<head>
<title> Eliminar Utilizador </title>
</head>
<body>
Dados Eliminados:
<?php

$codigo = $_POST["codigo"];

$conexao= mysql_connect ('localhost', 'root','');
if ($conexao)
{
	echo '<br>Liga��o efetuada!';
	mysql_select_db("giveitchange",$conexao);
	$texto = "delete from utilizador  where nmecanografico like '%".$codigo."%'";
	$resultado = mysql_query($texto);
}else
{
	echo '<br>Erro de Liga��o!';
}
mysql_close($conexao);

?>
<p><a href=area_reservada_admin.php> Voltar</a></p>
</body>
</html>