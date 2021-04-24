<?php
//error_reporting(5);
//session_start();
require_once('../ra.model/Simpatizante.class.php');
require_once('../ra.controller/ControllerSimpatizante.php');
date_default_timezone_set("America/Mexico_City");

$simp_id= $_POST['simp_id'];

$controller=new ControllerSimpatizante();
$controller->actualizarGeneroFemeninoView($simp_id);


?>