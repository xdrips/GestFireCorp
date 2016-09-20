<?php
session_start();
if(!isset($_SESSION['user'] )) header("location:index.php");
?>
<html>
<head>
  <title>Área de Administrador</title>
</head>
<body>
<h2>  <center>Área Reservada ao Administrador </h2>
<br>
<table>
<tr>
<td>
<p align=center ><a href=registoadministrador.html>Novo Administrador</a></p>
<p align=center><a href=listaradministrador.php>Listar Administrador</a></p>
<p align=center><a href=alteraradmin.php>Alterar Administrador</a></p>
<p align=center><a href=eliminaradmin.html>Eliminar Administrador</a></p>
</td>
<td>
<p align=center><a href=aregistoutilizador.html>Novo Utilizador</a></p>
<p align=center><a href=listaruser.php>Listar Utilizador</a></p>
<p align=center><a href=aalteraruser.php>Alterar Utilizador</a></p>
<p align=center><a href=aeliminaruser.php>Eliminar Utilizadores</a></p>
</td>
<td>
<p align=center><a href=registodisponibilidade.php>Registo de Disponibilidade</a></p>
<p align=center><a href=aalterardisponibilidade.php>Alterar Disponibilidade</a></p>
<p align=center><a href=alistarbombeiro.php>Disponibilidade por Bombeiro</a></p>
<p align=center><a href=aListarmes.php>Disponibilidade por Mês</a></p>
<p align=center><a href=Listartotais.php>Disponibilidade totais</a></p>

</td>
<td>
<p align=center><a href=registofalta.php>Registo de Justificações</a></p>
<p align=center><a href=listarjustificacoes.php>Visualização de Justificações</a></p>
<p align=center><a href=aeliminarjustificacoes.php>Eliminação de Justificações</a></p>
</td>
</tr>
</table>
<input type='button'  STYLE="color:#FFFFFF; background-color:#6B8E23; width:70;height:25" value='Sair' onClick="javascript: location.href='logout.php';"/>
	<br>
</body>
</html>
</body>
</html>