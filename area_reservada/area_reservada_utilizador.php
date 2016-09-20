<?php
session_start();
if(!isset($_SESSION['user'] )) header("location:index.php");
?>
<html>
<head>
  <title>Área de Utilizador</title>
</head>
<body>
<h2> <center> Área Reservada do Utilizador</h2>
<?php
$utilizador = $_SESSION['user'];
include 'init.php';
$texto="select * from utilizador where nmecanografico=".$utilizador;
$resultado =mysql_query($texto);
$registo=mysql_fetch_array($resultado);
echo "Bem vindo ".$utilizador." - ".$registo ['nome'];
echo"</font>";
echo"</strong>";
echo"<br>";
echo"<br>";
?>
<p align=left><a href=ualteraruser.php>Visualizar/Alterar dados do Utilizador</a></p>
<p align=left><a href=uregistodisponibilidade.php> Inserção de Disponibilidade</a></p>
<p align=left><a href=uaalterardisponibilidade.php> Alterar Disponibilidade</a></p>
<p align=left><a href=ualistarbombeiro1.php> Visualização de Disponibilidade</a></p>
<p align=left><a href=ualistarbombeiro2.php> Consultar Justificação de Faltas</a></p>

	<input type='button'  STYLE="color:#FFFFFF; background-color:#6B8E23; width:70;height:25" value='Sair' onClick="javascript: location.href='logout.php';"/>
	<br>

</body>
</html>