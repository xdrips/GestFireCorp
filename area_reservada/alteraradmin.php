<html>
<head>
<title> Alterar Administrador </title>
</head>
<body>
<p align=center> Alterar Administrador </p>
<form action=alteraradminstrador.php method="POST">
<p> Qual o código do administrador que quer alterar? 


 <?php  
include 'init.php';
	  $query="select * from administrador order By Nome";

      $result = mysql_query ($query);
      echo "<select name=codigo value=''> 'Administrador'</option>";

    while($nt=mysql_fetch_array($result)){
     
	   echo " <optgroup label='".$nt[nome]."'>";
             echo "<option  value='".$nt[login]."'>".$nt[nome]." - ".$nt[funcao]."</option>";
    echo "</optgroup>";
	  }

echo "</select>";
?>
<br>

<input type=submit value=Alterar>

<br>

<p><a href=area_reservada_admin.php> Voltar</a></p>
</p>
</form>

</body>
</html>