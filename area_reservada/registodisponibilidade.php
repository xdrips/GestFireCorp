<html>
<head>
<title> OnTimeReplacement </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<p align=center> Registar Disponibilidade </p>
<form action=gravardisponibilidade.php method="POST">
<?php  
include 'init.php';
	  $query="select * from  disponibilidades order By codigo DESC";

      $result = mysql_query ($query);
	  $codigo = mysql_num_rows($result);
   
	  $codigo =  1 + $codigo;
echo "<p>Codigo de Registo: <input type=text readonly size=30 name=codigo value=".$codigo."></p>";
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

<p>Mês: 
  <label for="mes"></label>
  <select name="mes" id="mes">
    <option>Janeiro</option>
    <option>Fevereiro</option>
    <option>Mar&ccedil;o</option>
    <option>Abril</option>
    <option>Maio</option>
    <option>Junho</option>
    <option>Julho</option>
    <option>Agosto</option>
    <option>Setembro</option>
    <option>Outubro</option>
    <option>Novembro</option>
    <option>Dezembro</option>
  </select>
</p>


<p>Dia: 
  <label for="dia"></label>
  <select name="dia" id="mes">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
    <option>11</option>
    <option>12</option>
    <option>13</option>
    <option>14</option>
    <option>15</option>
    <option>16</option>
    <option>17</option>
    <option>18</option>
    <option>19</option>
    <option>20</option>
    <option>21</option>
    <option>22</option>
    <option>23</option>
    <option>24</option>
    <option>25</option>
    <option>26</option>
    <option>27</option>
    <option>28</option>
    <option>29</option>
    <option>30</option>
    <option>31</option>     
  </select>
</p>

<p>Disponibilidade: 
  <label for="disponibilidade"></label>
  <select name="disponibilidade" id="disponibilidade">
    <option>Total</option>
    <option>Diurno</option>
    <option>Nocturno</option>
    <option>Central</option>
    <option>Sem Disponibilidade</option>
   </select>
</p>

<input type=submit value=Gravar>
<input type=reset value=Limpar
</p>

</form>
<p><a href=area_reservada_admin.php> Voltar</a></p>
</body>
</html>