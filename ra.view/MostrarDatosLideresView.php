<?php
//error_reporting(5);
require_once('../ra.controller/ControllerLider.php');
//session_start();

$controller = new ControllerLider();
$controller->mostrarNombreLideres();