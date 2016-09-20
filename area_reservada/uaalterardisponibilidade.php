<?php
session_start();
if(!isset($_SESSION['user'] )) header("location:index.php");
?>
<html>
<head>
<title> Alterar Utilizador </title>
</head>
<body>
<p align=center> Disponibilidade por bombeiro</p>
<form action=uaalterardisponibilidade1.php method="POST">
<p> Qual o código da disponibilidade a consultar? 

<?php  
include 'init.php';
$codigo=$_SESSION['user'];
	  $query="select * from  disponibilidades where nmecanografico = ".$codigo." order By codigo  DESC";

      $result = mysql_query ($query);
      echo "<select name=codigo value=''> 'Codigo'</option>";

    while($nt=mysql_fetch_array($result)){
     
	   echo " <optgroup label='".$nt[codigo]."'>";
             echo "<option  value='".$nt[codigo]."'>".$nt[nmecanografico]." - ".$nt[mes]." - ".$nt[dia]." - ".$nt[disponibilidade]."</option>";
    echo "</optgroup>";
	  }

echo "</select>";
echo "(Bombeiro - Mês - Dia - Disponibilidade)";
?>
 
</p>

<input type=submit value=Alterar>
<input type=reset value=Limpar>
</p>
</form>
<p><a href=area_reservada_utilizador.php> Voltar</a></p>
</body>
</html>