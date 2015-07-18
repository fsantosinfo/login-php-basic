<?php session_start();?>
<!DOCTYPE html>
<html lang="pt">
<meta charset="utf-8" />
<?php
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	
	/* Esta area deve ser substituida por seu login com banco de dados, obtendo os dados de uma forma mais segura do que o modo texto
	 * porem o restante do sistema pode usar a mesma logica.
	 */
	
	$userLocal = "user";
	$passLocal = "pass";
	
	/* Fim da obtenção dos dados do banco de dados
	 * Vale lembrar que essa é uma forma muito simples, mas que em sistemas de maior acesso deve-se usar banco de dados e senhas seguras
	 * e criptografadas.
	 */
	
	if (($user == $userLocal) and $pass == $passLocal){
		
	$_SESSION['user'] = $user;

	echo "<meta http-equiv='refresh' content='0; URL= home.php'>

	<script type=\"text/javascript\">
	alert(\"Login Ok.\");
	</script>
	";
	
	echo "</html>";
	return die;
	
	}
	
	else
	
	echo "<meta http-equiv='refresh' content='0; URL= index.php'>

	<script type=\"text/javascript\">
	alert(\"Login not ok!\");
	</script>";
	session_destroy();
	session_unset();
?>
