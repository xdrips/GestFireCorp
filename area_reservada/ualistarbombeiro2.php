<?php
session_start();
if(!isset($_SESSION['user'] )) header("location:index.php");
?>
<html>
<head>
<title> Lista de Justificações</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<p align=center> Lista de justificações </p>
<?php
$coneccao=mysql_connect('localhost','root','');
if($coneccao)
 {
	$codigo=$_SESSION['user'];
	mysql_select_db("giveitchange",$coneccao);

	$consulta = "select * from faltas where nmecanografico like '%".$codigo."%'";
	$resultado = mysql_query($consulta);
	echo ' <table border=1 width=100%>';
     echo '<tr><td>Data</td><td>Bombeiro</td><td>Motivo</td><td>Tipo</td>';
	while ($dados = mysql_fetch_array($resultado))
	{
	echo "<tr><td>".$dados['data']."</td><td>".$dados['nmecanografico']."</td><td>".$dados['motivo']."</td><td>".$dados['tipo']."</td>";
	}
	echo '</table>';
 }
 else
 {
	echo '<p> Erro a ligar À base de dados</p>';
 }
 mysql_close($coneccao);
?>
<p><a href=area_reservada_utilizador.php> Voltar</a></p>
</body>

</html>