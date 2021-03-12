<?php
//error_reporting(5);
require_once('../ra.controller/ControllerSimpatizante.php');
//session_start();

$simpine_id= $_POST['simpine_id'];

$controller = new ControllerSimpatizante();
$controller->mostrarEditarSimpatizanteIne($simpine_id);