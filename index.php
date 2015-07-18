<?php 
session_start(); 
if(isset ($_SESSION['user']) == true) 
{header('location:home.php'); return die;}
?>
<!DOCTYPE html>
<html lang="pt">
	<head>
		
		<!-- Sistema de Login Basico, apenas para implementação basica.
			 Criado por: Francisco Santos
			 Codigo Open Source, ao usar favor dar o Crédito e caso faça melhorias, favor remete-las, obrigado.
	   -->
	   
		<title>Login</title>
		<link type="text/css" rel="stylesheet" href="layout.css">
		<meta charset="utf-8" />
	</head>
	<body>
		<div id="form">
			<form method="post" action="login.php">
				<img src="img/login.gif" width="32"> <h1>Company Login</h1>
				<input type="text" name="user" class="user" placeholder="User">
				<input type="password" name="pass" class="pass" placeholder="Password">
				<input type="submit" value="Login" class="login">
			</form>			
		</div>
	</body>
</html>