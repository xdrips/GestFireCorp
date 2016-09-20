<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Repositório Digital - Contactos</title>
<meta name="keywords" content="blue tech, contact info., free template, web design" />
<meta name="description" content="Blue Tech, Contact Info., free web template by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>

<div id="templatemo_wrapper"><!-- END of header -->
<Form action="Alterar_dados.php" method = "POST">

 <h1>Alterar</h1>
 <br>

<?php

include 'init.php';
$Numero = $_POST["Numero"];


$texto="select * from alunos where Numero='".$Numero."'";
$conclusao=mysql_query($texto);
$registo=mysql_fetch_array($conclusao);

echo 	 "Numero:<input type='text'size='50' name= 'Numero' value='".$registo['Numero']."'><br><br>";

echo 	 "Nome:<input type='text'size='50' name= 'Nome' value='".$registo['Nome']."'><br><br>";

echo 	 "Email:<input type='text'size='50' name= 'Email' value='".$registo['Email']."'><br><br>";

echo 	 "Sexo:<input type='text'size='50' name= 'Sexo' value='".$registo['Sexo']."'><br><br>";

echo 	 "Curso:<input type='text'size='50' name= 'Curso' value='".$registo['Curso']."'><br><br>";

echo 	 "Turma:<input type='text'size='50' name= 'Turma' value='".$registo['Turma']."'><br><br>";

echo 	 "Telemovel:<input type='text'size='50' name= 'Telemovel' value='".$registo['Telemovel']."'><br><br>";

echo 	 "Telefone:<input type='text'size='50' name= 'Telefone' value='".$registo['Telefone']."'><br><br>";

echo 	 "BI:<input type='text'size='50' name= 'BI' value='".$registo['BI']."'><br><br>";

echo 	 "Password:<input type='text'size='50' name= 'Password' value='".$registo['Password']."'><br><br>";

echo 	 "Validar:<input type='text'size='50' name= 'Validar' value='".$registo['Validar']."'><br><br>";

echo 	 "NAcesso:<input type='text'size='50' name= 'NAcesso' value='".$registo['NAcesso']."'><br><br>";

echo 	 "UltimoAcesso:<input type='text'size='50' name= 'UltimoAcesso' value='".$registo['UltimoAcesso']."'><br><br>";


echo "<input type=submit value=Alterar >";
echo "<input type=Reset value=Limpar >";
echo"   </form>";	

   ?>
  <a href="#"><img src="images/Topo.png" width="109" height="53" title="Voltar ao Topo" /></a>    </div>
</div> 
<!-- END of templatemo_wrapper --><!-- END of templatemo_footer_wrapper -->

</body>
</html>