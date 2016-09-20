
<html>
	<head>


<Form action="Alterar_Dados_Admin.php" method = "POST">

 <h1>Alterar</h1>
 <br>

<?php

include 'init.php';


$codigo=$_POST['codigo'];
$texto="select * from administrador where login='".$codigo."'";
$conclusao=mysql_query($texto);
$registo=mysql_fetch_array($conclusao);

echo	  "Login:  <input type='text' readonly size='56' name='login' value='".$registo ['login']."'><br>";

echo	  "Nome:  <input type='text' size='56' name='nome' value='".$registo ['nome']."'><br>";
	
echo	  "Função:  <input type='text' size='56' name='funcao' value='".$registo ['funcao']."'><br>";

echo      "Nova Password: <input type=password size=30 name=password></p>";
echo "<input type=submit value=Alterar >";
echo "<input type=Reset value=Anular >";
echo"   </form>";	

   ?>
<p><a href=area_reservada_admin.php> Voltar</a></p>
</body>
</html>