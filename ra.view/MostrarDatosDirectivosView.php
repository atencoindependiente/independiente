<?php
//error_reporting(5);
require_once('../ra.controller/ControllerDirectivo.php');
//session_start();

$controller = new ControllerDirectivo();
$controller->mostrarNombreDirectivos();