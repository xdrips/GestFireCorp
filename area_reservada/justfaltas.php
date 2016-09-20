<html>
<head>
<title> Justificar Faltas </title>
</head>
<body>
Dados Registados
<?php
 echo "<br>Nome:";
 echo $_POST['nome'];
echo "<br>Piquete Diurno:";
 echo $_POST["pd"];
echo "<br>Piquete Nocturno:";
 echo $_POST["pn"];
 echo "<br>Instrução Geral:";
 echo $_POST["ig"];
echo "<br>Instrução Secção:";
 echo $_POST["is"];
echo "<br>Motivo:";
 echo $_POST["motivo"];
echo "<br>Data:";
 echo $_POST["data"];




$nome = $_POST["nome"];
$pd = $_POST["pd"];
$pn = $_POST["pn"];
$ig = $_POST["ig"];
$is = $_POST["is"];
$data = $_POST["data1"];
$data = $_POST["data2"];
$data = $_POST["data3"];
$motivo = $_POST["motivo"];


$conexao = mysql_connect('localhost','root','');
if ($conexao)
{
echo 'Ligação efectuada';
mysql_select_db("giveitchange" ,$conexao);
$texto = "insert into faltas value ('".$nome."','".$pd."','".$pn."','".$ig."','".$ig."','".$is."','".$data."','".$motivo."')";
$resultado = mysql_query($texto);
}else
{
 echo 'Erro de ligação';
}
mysql_close($conexao);

?>
<button onclick="goBack()">Voltar</button>
<script>
function goBack() {
    window.history.back();
}
</script>
</body>
</html>