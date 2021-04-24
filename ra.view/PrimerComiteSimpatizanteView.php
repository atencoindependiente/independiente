<?php
//error_reporting(5);
session_start();
require_once('../ra.model/Simpatizante.class.php');
require_once('../ra.controller/ControllerSimpatizante.php');
date_default_timezone_set("America/Mexico_City");

$simp_id= $_POST['simp_id'];
$fecha_movimiento = date("Y-m-d H:i:s");
$motivo_movimiento="Primer comite visitado";
$usuario_movimiento = $_SESSION["usuario_id"];
//$usuario_movimiento = 1;

$controller=new ControllerSimpatizante();
$controller->primerComiteSimpatizante($simp_id,$fecha_movimiento,$motivo_movimiento,$usuario_movimiento);


?>