<html>
<head>
<title> Eliminar Administrador </title>
</head>
<body>
Dados Eliminados:
<?php

$codigo = $_POST["codigo"];

$conexao= mysql_connect ('localhost', 'root','');
if ($conexao)
{
	echo '<br>Ligação efetuada!';
	mysql_select_db("giveitchange",$conexao);
	$texto = "delete from administrador where login = '".$codigo."'";
	$resultado = mysql_query($texto);
}else
{
	echo '<br>Erro de Ligação!';
}
mysql_close($conexao);

?>
<p><a href=area_reservada_admin.php> Voltar</a></p>
</body>
</html>