<html>
<head>
<title> Eliminar Utilizador </title>
</head>
<body>
<p align=center> Eliminar Justificação </p>
<form action=aeliminarjustificacao.php method="POST">
<p> Qual o código da falta que quer Eliminar? 

<?php  
include 'init.php';
	  $query="select * from  faltas order By Codfalta";

      $result = mysql_query ($query);
      echo "<select name=codigo value=''> 'Codigo'</option>";

    while($nt=mysql_fetch_array($result)){
     
	   echo " <optgroup label='".$nt[data]."'>";
             echo "<option  value='".$nt[codfalta]."'>".$nt[nmecanografico]." - ".$nt[tipo]."</option>";
    echo "</optgroup>";
	  }

echo "</select>";
?>
(Bombeiro - Tipo de Falta)
</p>

<input type=submit value=Eliminar>
<input type=reset value=Limpar>
</p>
</form>
<p><a href=area_reservada_admin.php> Voltar</a></p>
</body>
</html>