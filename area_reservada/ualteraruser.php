<?php
session_start();
if(!isset($_SESSION['user'] )) header("location:index.php");
?>
<html>
	<head>


<Form action="ualterar_Dados.php" method = "POST">

 <h1>Alterar</h1>
 <br>

<?php

include 'init.php';


$codigo=$_SESSION['user'];
$texto="select * from utilizador where nmecanografico='".$codigo."'";
$conclusao=mysql_query($texto);
$registo=mysql_fetch_array($conclusao);

echo	  "Nome:  <input type='text' size='56' name='nome' value='".$registo ['nome']."'><br>";

echo	  "Email:  <input type='text' size='56' name='email' value='".$registo ['email']."'><br>";
	
echo	  "Telefone:  <input type='text' size='56' name='telefone' value='".$registo ['telefone']."'><br>";

echo	  "Telemóvel:  <input type='text' size='56' name='telemovel' value='".$registo ['telemovel']."'><br>";

echo	  "Morada:  <input type='text' size='56' name='morada' value='".$registo ['morada']."'><br>";
	
echo	  "Código Postal:  <input type='text' size='56' name='codpostal' value='".$registo ['codpostal']."'><br>";

echo	  "Localidade:  <input type='text' size='56' name='localidade' value='".$registo ['localidade']."'><br>";

echo	  "Nº Contribuinte  <input type='text' size='56' name='ncontribuinte' value='".$registo ['ncontribuinte']."'><br>";
	
echo	  "Cartão Cidadão:  <input type='text' size='56' name='nccidadao' value='".$registo ['nccidadao']."'><br>";

echo	  "Nº Mecanográfico:  <input type='text' size='56' name='nmecanografico' readonly  value='".$registo ['nmecanografico']."'><br>";

echo	  "Corporação:  <input type='text' size='56' name='corporacao' value='".$registo ['corporacao']."'><br>";
	
echo	  "Nova Password:  <input  size='56' type=password name='password' value='".$registo ['password']."'><br>";


echo "<input type=submit value=Alterar >";
echo "<input type=Reset value=Anular >";
echo"   </form>";	

   ?>
<p><a href=area_reservada_utilizador.php> Voltar</a></p>
</body>
</html>