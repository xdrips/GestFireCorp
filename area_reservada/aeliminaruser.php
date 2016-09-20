<html>
<head>
<title> Eliminar Utilizador </title>
</head>
<body>
<p align=center> Eliminar Utilizador </p>
<form action=eliminaruser.php method="POST">
<p> Qual o código do utilizador que quer Eliminar? 

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

<input type=submit value=Eliminar>
<input type=reset value=Limpar>
</p>
</form>
<p><a href=area_reservada_admin.php> Voltar</a></p>
</body>
</html>