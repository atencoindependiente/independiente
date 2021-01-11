<?php
session_start();
if(!isset($_SESSION['usuario_id'])){
	session_destroy(); 
	header("location: ./login.php");
}else{
	if($_SESSION['usuario_id']==''){
		session_destroy(); 
	}else{
		/*
		echo $_SESSION['usuario_id'];
		echo $_SESSION['usuario_tipo'];
		echo "<script>alert('Bienvenido');</script>";
		*/
	}
}
?>