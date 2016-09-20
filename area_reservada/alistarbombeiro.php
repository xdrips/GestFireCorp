<html>
<head>
<title> Alterar Utilizador </title>
</head>
<body>
<p align=center> Disponibilidade por bombeiro</p>
<form action=alistarbombeiro1.php method="POST">
<p> Qual o código do bombeiro a consultar? 

<?php  
include 'init.php';
	  $query="select * from  utilizador order By nome";

      $result = mysql_query ($query);
      echo "<select name=codigo value=''> 'Utilizador'</option>";

    while($nt=mysql_fetch_array($result)){
     
	   echo " <optgroup label='".$nt[nome]."'>";
             echo "<option  value='".$nt[nmecanografico]."'>".$nt[nmecanografico]." - ".$nt[email]."</option>";
    echo "</optgroup>";
	  }

echo "</select>";
?>

</p>

<input type=submit value=Listar>
<input type=reset value=Limpar>
</p>
</form>
<p><a href=area_reservada_admin.php> Voltar</a></p>
</body>
</html>