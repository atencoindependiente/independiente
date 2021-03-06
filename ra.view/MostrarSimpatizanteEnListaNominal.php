<?php
//error_reporting(5);
require_once('../ra.controller/ControllerSimpatizante.php');
//session_start();

$controller = new ControllerSimpatizante();
$controller->mostrarSimpatizanteEnListaNominal();