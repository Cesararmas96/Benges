<?php
session_start();
if($_SESSION['usuario']){
	echo "<script language='javascript'>"; 
	echo "alert('Sesion cerrada')"; 
	echo "</script>";  
	session_destroy();
	header("location: ../index.php");
	
	
}
else{
	echo "<script language='javascript'>"; 

	echo "</script>";  
	header("location: ../index.php");
	
}
?>