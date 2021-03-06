<?php
//error_reporting(5);
require_once('../ra.controller/ControllerCoordinador.php');
//session_start();

$controller = new ControllerCoordinador();
$controller->mostrarCoordinador();