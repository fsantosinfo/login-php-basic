<?php
	session_start();
	$user = $_SESSION['user'];

	session_destroy();
	session_unset();

	echo "<script>alert('Bye! Bye!');top.location.href='index.php';</script>";
?> 