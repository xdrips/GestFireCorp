<?php

session_start();
include 'init.php';

$utilizador = $_POST["utilizador"];
$password = $_POST["password"];


$consulta="select * from administrador where login ='".$utilizador."' and password='".$password."'";

$resultado=mysql_query($consulta);
if(mysql_num_rows($resultado)>0)
{
	
	$_SESSION['user'] = $utilizador;
header("location:area_reservada_admin.php");
exit;
}



$consulta="select * from utilizador where nmecanografico ='".$utilizador."' and password='".$password."'";

$resultado=mysql_query($consulta);
if(mysql_num_rows($resultado)>0)
{
$_SESSION['user'] = $utilizador;
header("location:area_reservada_utilizador.php");
}
else
{
header("location:index_erro.php");
}
?>