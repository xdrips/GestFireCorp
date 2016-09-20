<html>
<head>
</head>
<body>
<p align=center> Dados: </p>
<?php

$codigo = $_POST["codigo"];
$coneccao=mysql_connect('localhost','root','');
if($coneccao)
 {
	mysql_select_db("teste2si",$coneccao);
	echo'<p> Ligação à base de dados efetuada</p>';

	$consulta = "select * from produtos where codigo = '".$codigo."'";
	$resultados = mysql_query($consulta);

	echo'<table border=1 width=100%>';
	echo'<tr> <td> Codigo </td> <td> Designacao </td> <td> Preco</td> </tr>';

	while ($dados = mysql_fetch_array($resultados))
	{
	
	echo "<tr><td>".$dados['codigo']."</td><td>".$dados ['designacao']."</td><td>".$dados['preco']."</td></tr>";

	}  
	echo '</table>';
 }
else
 {
	echo'<p> Erro a ligar à base de dados</p>';

 }

mysql_close($coneccao);
?>
</body>
</html>