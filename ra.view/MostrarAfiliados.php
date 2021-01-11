<?php
//error_reporting(5);
require_once('../ra.controller/ControllerAfiliado.php');
//session_start();

$controller = new ControllerAfiliado();
$controller->mostrarAfiliados();