<html>
<head>
<title> Registar Utilizador </title>
</head>
<body>
Dados Registados
<?php
 echo "<br>Login:";
 echo $_POST['login'];
echo "<br>Nome:";
 echo $_POST["nome"];
echo "<br>Fun��o:";
 echo $_POST["funcao"];
 echo "<br>Password:";
 echo $_POST["password"];


$login = $_POST["login"];
$nome = $_POST["nome"];
$funcao = $_POST["funcao"];
$password = $_POST["password"];


$conexao = mysql_connect('localhost','root','');
if ($conexao)
{
echo 'Liga��o efectuada';
mysql_select_db("giveitchange" ,$conexao);
$texto = "insert into administrador value ('".$login."','".$password."','".$nome."','".$funcao."')";
$resultado = mysql_query($texto);
}else
{
 echo 'Erro de liga��o';
}
mysql_close($conexao);

?>
<p><a href=area_reservada_admin.php> Voltar</a></p>
</body>
</html>