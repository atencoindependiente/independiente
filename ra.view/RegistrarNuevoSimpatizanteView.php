<?php
//error_reporting(5);
//session_start();
require_once('../ra.model/Simpatizante.class.php');
require_once('../ra.controller/ControllerSimpatizante.php');
date_default_timezone_set("America/Mexico_City");

$mdl_nombre = $_POST["mdl_nombre"];
$mdl_apaterno = $_POST["mdl_apaterno"];
$mdl_amaterno = $_POST["mdl_amaterno"];
$mdl_localidad = $_POST["mdl_localidad"];
$mdl_seccion = $_POST["mdl_seccion"];
$mdl_direccion = $_POST["mdl_direccion"];
$mdl_lider = $_POST["mdl_lider"];
$mdl_coordinador = $_POST["mdl_coordinador"];
$mdl_cp = $_POST["mdl_cp"];
$mdl_directivo = $_POST["mdl_directivo"];
$mdl_tel_celular = $_POST["mdl_tel_celular"];
$mdl_comentarios = $_POST["mdl_comentarios"];
$fecha_movimiento = date("Y-m-d H:i:s");
$motivo_movimiento="Se agrega nuevo simpatizante.";
//$usuario_movimiento = $_SESSION["usuario_id"];
$usuario_movimiento = 1;

$simpatizante= new Simpatizante(
    $mdl_nombre,
    $mdl_apaterno,
    $mdl_amaterno,
    $mdl_localidad,
    $mdl_seccion,
    $mdl_direccion,
    $mdl_cp,
    $mdl_tel_celular,
    $mdl_comentarios,
    $fecha_movimiento,
    $motivo_movimiento,
    $usuario_movimiento,
    $mdl_directivo,
    $mdl_lider,
    $mdl_coordinador
);

$controller=new ControllerSimpatizante();
$controller->registrarSimpatizante($simpatizante);

?>