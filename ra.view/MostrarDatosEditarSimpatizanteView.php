<?php
//error_reporting(5);
require_once('../ra.controller/ControllerSimpatizante.php');
//session_start();

$simp_id= $_POST['simp_id'];

$controller = new ControllerSimpatizante();
$controller->mostrarEditarSimpatizante($simp_id);