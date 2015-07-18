<?php 
session_start(); 
if(!isset ($_SESSION['user']) == true) { unset($_SESSION['user']); 
header('location:index.php'); return die; } $user = $_SESSION['user'];
?>
Sistema de Login Basico, apenas para implementação basica.<br>
Criado por: Francisco Santos<br>
Codigo Open Source, ao usar favor dar o Crédito e caso faça melhorias, favor remete-las, obrigado.<br><br>
<a href="logout.php">Logout</a>
