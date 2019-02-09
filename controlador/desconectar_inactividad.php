<?php
session_start();

	echo "<script language='javascript'>"; 
	echo "alert('Sesion cerrada')"; 
	echo "</script>";  
	session_destroy();
	header("location: ../vista/iniciar.php");
	
?>