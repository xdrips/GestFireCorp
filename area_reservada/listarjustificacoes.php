<html>
<head>
<title> Lista de Disponibilidades</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<p align=center> Lista de Justificações </p>
<?php
$coneccao=mysql_connect('localhost','root','');
if($coneccao)
 {
	 
	mysql_select_db("giveitchange",$coneccao);
	echo '<p> ligação À base de dados efetuada</p>';
	$consulta = "select * from faltas order by CodFalta";
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
<p><a href=area_reservada_admin.php> Voltar</a></p>
</body>

</html>