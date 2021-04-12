<?php
//error_reporting(5);
//session_start();
require_once('../ra.model/Simpatizante.class.php');
require_once('../ra.controller/ControllerSimpatizante.php');
date_default_timezone_set("America/Mexico_City");

$mdl_simpine_id= $_POST['simpine_id'];
$fecha_movimiento = date("Y-m-d H:i:s");
$motivo_movimiento="Se elimino simpatizante.";
//$usuario_movimiento = $_SESSION["usuario_id"];
$usuario_movimiento = 1;

$controller=new ControllerSimpatizante();
$controller->eliminarSimpatizante($mdl_simpine_id,$fecha_movimiento,$motivo_movimiento,$usuario_movimiento);


?>