<?php
session_start();
?>
<html>
<head>

  <title>Página inicial</title> 
</head>
<script>
function funcao(form){
if (form.utilizador.value=="") {
alert("Preencha o campo do utilizador");
form.utilizador.focus();
return false;
}
if (form.password.value=="") {
alert("Insira uma password");
form.password.focus();
return false;
}
}
</script>

<body>
<form action="Login.php" method="POST" onSubmit="return funcao(this);">
<p class="green"><strong><font size=4>Login</strong></font></p>
 <br>
 <table border="0">
  <tr>
    <td>Nº Mecanográfico: </td>
    <td><input type=text name=utilizador size=20 maxlength=10></td>
  </tr>
  <tr>
    <td> Password:</td>
    <td><input type=password name=password size=20 maxlength=20></td>
  </tr>
</table>
	<br>
	<input type=submit STYLE="color:#FFFFFF; background-color:#6B8E23; width:70;height:25" value=Entrar>
	<input type=Reset STYLE="color:#FFFFFF; background-color:#6B8E23; width:70;height:25" value=Limpar>
    </form>

<p> <a href=registoutilizador.html> Registar Aqui</a></p>
</body>
</html>