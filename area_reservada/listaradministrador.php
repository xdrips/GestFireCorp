<html>
<head>
<title> Lista de Administrador</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<p align=center> Lista de Administrador </p>
<?php
$coneccao=mysql_connect('localhost','root','');
if($coneccao)
 {
	mysql_select_db("giveitchange",$coneccao);
	echo '<p> ligação À base de dados efetuada</p>';
	$consulta = "select * from administrador";
	$resultado = mysql_query($consulta);
	echo ' <table border=1 width=100%>';
     echo '<tr><td>Login</td><td>Nome</td><td>Função</td>';
	while ($dados = mysql_fetch_array($resultado))
	{
	echo "<tr><td>".$dados['login']."</td><td>".$dados['nome']."</td><td>".$dados['funcao']."</td>";
	}
	echo '</table>';
 }
 else
 {
	echo '<p> Erro a ligar À base de dados</p>';
 }
 mysql_close($coneccao);
?>
<p><a href=area_reservada_admin.php> Voltar</a></p>
</body>

</html>