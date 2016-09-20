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
	Os seus dados foram Actualizados com sucessos. <br>
<br> Dados Registados
<br>
<?php
	echo "Nome:";
	echo $_POST["nome"];
	echo "<BR>Email:";
	echo $_POST["email"];
	echo "<BR>Telefone:";
	echo $_POST["telefone"];
	echo "<BR>Telemovel:";
	echo $_POST["telemovel"];
	echo "<BR> Morada:";
	echo $_POST["morada"];
	echo "<BR> Codigo-Postal:";
	echo $_POST["codpostal"];
	echo "<BR> Localidade:";
	echo $_POST["localidade"];
	echo "<BR> NºContribuinte:";
	echo $_POST["ncontribuinte"];
	echo "<BR> Cartão Cidadão:";
	echo $_POST["nccidadao"];
	echo "<BR> Nº Mecanografico:";
	echo $_POST["nmecanografico"];
	echo "<BR> Corporação:";
	echo $_POST["corporacao"];


$Numero = $_POST["nome"];
$Nome = $_POST["email"];
$Email = $_POST["telefone"];
$Sexo = $_POST["telemovel"];
$Curso = $_POST["morada"];
$Turma = $_POST["codpostal"];
$Telemovel = $_POST["localidade"];
$Telefone = $_POST["ncontribuinte"];
$BI = $_POST["nccidadao"];
$Password = $_POST["nmecanografico"];
$Validar = $_POST["corporacao"];


$coneccao = mysql_connect('localhost','root','');
if ($coneccao)
{
	echo'<Br>Ligação Efectuada';
	mysql_select_db("giveitchange",$coneccao);

	$texto = "UPDATE utilizador set Nome='".$Nome."', Email='".$Email."', Sexo='".$Sexo."', Curso='".$Curso."', Turma='".$Turma."', Telemovel='".$Telemovel."', Telefone='".$Telefone."', BI='".$BI."', Password='".$Password."', Validar='".$Validar."', NAcesso='".$NAcesso."' , UltimoAcesso='".$UltimoAcesso."' where Numero='".$Numero."'";
 
$resultados = mysql_query($texto);
}else
{
	echo'<BR>Erro de Ligação';
}
mysql_close($coneccao);
	
?>
  <a href="#"><img src="images/Topo.png" width="109" height="53" title="Voltar ao Topo" /></a>    </div>
</div> 
<!-- END of templatemo_wrapper --><!-- END of templatemo_footer_wrapper -->

</body>
</html>