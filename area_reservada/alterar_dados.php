<html>
<head>
<title> Registar Utilizador </title>
</head>
<body>
Dados Registados
<?php
 echo "<br>Nome:";
 echo $_POST['nome'];
echo "<br>Email:";
 echo $_POST["email"];
echo "<br>Telefone:";
 echo $_POST["telefone"];
 echo "<br>Telemovel:";
 echo $_POST["telemovel"];
echo "<br>Morada:";
 echo $_POST["morada"];
echo "<br>Codigo Postal:";
 echo $_POST["codpostal"];

 echo "<br>Localidade:";
 echo $_POST["localidade"];
echo "<br>Nº Contribuinte:";
 echo $_POST["ncontribuinte"];
echo "<br>Cartão Cidadão:";
 echo $_POST["nccidadao"];
 echo "<br>Corporação:";
 echo $_POST["corporacao"];
echo "<br>Nº Mecanográfico:";
 echo $_POST["nmecanografico"];

$nome = $_POST["nome"];
$email = $_POST["email"];
$password = $_POST["password"];
$telefone = $_POST["telefone"];
$telemovel = $_POST["telemovel"];
$morada = $_POST["morada"];
$codpostal = $_POST["codpostal"];
$localidade = $_POST["localidade"];
$ncontribuinte = $_POST["ncontribuinte"];
$ncidadao = $_POST["nccidadao"];
$nmecanografico = $_POST["nmecanografico"];
$corporacao = $_POST["corporacao"];



$conexao = mysql_connect('localhost','root','');
if ($conexao)
{
echo 'Ligação efectuada';
mysql_select_db("giveitchange" ,$conexao);
$texto = "UPDATE utilizador set email='".$email."',password='".$password."',nome='".$nome."',morada='".$morada."',localidade='".$localidade."',codpostal='".$codpostal."',telefone='".$telefone."',ncontribuinte='".$ncontribuinte."',nccidadao='".$ncidadao."',corporacao='".$corporacao."' where nmecanografico like '%".$nmecanografico."%'";

$resultado = mysql_query($texto);

}else
{
 echo 'Erro de ligação';
}
mysql_close($conexao);

?>
<p><a href=area_reservada_admin.php> Voltar</a></p>
</body>
</html>