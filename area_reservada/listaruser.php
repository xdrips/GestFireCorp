<html>
<head>
<title> Lista de Utilizadores</title>
</head>
<body>
<p align=center> Lista de Utilizadores </p>
<?php
$coneccao=mysql_connect('localhost','root','');
if($coneccao)
 {
	mysql_select_db("giveitchange",$coneccao);
	echo '<p> ligação À base de dados efetuada</p>';
	$consulta = "select * from utilizador";
	$resultado = mysql_query($consulta);
	echo ' <table border=1 width=100%>';
     echo '<tr><td>Nome</td><td>Email</td><td>Telefone</td><td>Telemovel</td><td>Morada</td><td>Codigo Postal</td><td>Localidade</td><td>Nº Contribuinte</td><td>Cartão Cidadão</td><td>Nº Mecanográfico</td><td>Corporação</td>';
	while ($dados = mysql_fetch_array($resultado))
	{
	echo "<tr><td>".$dados['nome']."</td><td>".$dados['email']."</td><td>".$dados['telefone']."</td><td>".$dados['telemovel']."</td><td>".$dados['morada']."</td><td>".$dados['codpostal']."</td><td>".$dados['localidade']."</td><td>".$dados['ncontribuinte']."</td><td>".$dados['nccidadao']."</td><td>".$dados['nmecanografico']."</td><td>".$dados['corporacao']."</td>";
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