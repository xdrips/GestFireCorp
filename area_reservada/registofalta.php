<html>
<head>
<title> OnTimeReplacement </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<p align=center> Registar Justificação </p>
<form action=gravarjustificacao.php method="POST">
<?php  
include 'init.php';
	  $query="select * from  faltas order By codfalta DESC";

      $result = mysql_query ($query);
	  $codigo = mysql_num_rows($result);
   
	  $codigo =  1 + $codigo;
echo "<p>Codigo de Falta: <input type=text readonly size=30 name=codigo value=".$codigo."></p>";
?>



<p>Bombeiro:  

<?php  
include 'init.php';
	  $query="select * from  utilizador order By nome";

      $result = mysql_query ($query);
      echo "<select name=bombeiro value=''> 'Utilizador'</option>";

    while($nt=mysql_fetch_array($result)){
     
	   echo " <optgroup label='".$nt[nome]."'>";
             echo "<option  value='".$nt[nmecanografico]."'>".$nt[nmecanografico]." - ".$nt[email]."</option>";
    echo "</optgroup>";
	  }

echo "</select>";
?>
	



<p>Data: 
<input type='date' size='20' name='data'>
</p>
<p>Faltou a: 
  <label for="tipo"></label>
  <select name="tipo" id="tipo">
    <option>Piquete Diurno</option>
    <option>Piquete Nocturno</option>
    <option>Instrução Geral</option>
    <option>Outro tipo de Instrução</option>
    <option>Outro tipo de Serviço</option>
   </select>
</p>
<p>Motivo: 
  <textarea name="motivo" cols="200"></textarea>
</p>
<input type=submit value=Gravar>
<input type=reset value=Limpar>
</p>

</form>
<p><a href=area_reservada_admin.php> Voltar</a></p>
</body>
</html>