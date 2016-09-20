
<html>
	<head>


<Form action="aalterardisponibilidade2.php" method = "POST">

 <h1>Alterar</h1>
 <br>

<?php

include 'init.php';


$codigo=$_POST['codigo'];
$texto="select * from disponibilidades  where codigo='".$codigo."'";
$conclusao=mysql_query($texto);
$registo=mysql_fetch_array($conclusao);

echo	  "Codigo:  <input type='text' readonly size='5' name='codigo' value='".$registo ['codigo']."'><br>";

echo	  "Bombeiro:  <input type='text' size='20' name='bombeiro' value='".$registo ['nmecanografico']."'><br>";

echo	  "Mês:  <input type='text' size='20' name='mes' value='".$registo ['mes']."'><br>";
	
echo	  "Dia:  <input type='text' size='5' name='dia' value='".$registo ['dia']."'><br>";

echo      "Disponibilidade: <input size=30 name=disponibilidade value='".$registo ['disponibilidade']."'></p>";
echo "<input type=submit value=Alterar >";
echo "<input type=Reset value=Anular >";
echo"   </form>";	

   ?>
<p><a href=area_reservada_admin.php> Voltar</a></p>
</body>
</html>