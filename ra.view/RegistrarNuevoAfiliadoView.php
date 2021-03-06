<?php
//error_reporting(5);
//session_start();
require_once('../ra.model/Afiliado.class.php');
require_once('../ra.controller/ControllerAfiliado.php');
date_default_timezone_set("America/Mexico_City");

$mdl_nombre = $_POST["mdl_nombre"];
$mdl_apaterno = $_POST["mdl_apaterno"];
$mdl_amaterno = $_POST["mdl_amaterno"];
$mdl_localidad = $_POST["mdl_localidad"];
$mdl_seccion = $_POST["mdl_seccion"];
$mdl_direccion = $_POST["mdl_direccion"];
$mdl_cp = $_POST["mdl_cp"];
$mdl_tel_celular = $_POST["mdl_tel_celular"];
$mdl_tel_alterno = $_POST["mdl_tel_alterno"];
$mdl_email = $_POST["mdl_email"];
$mdl_comentarios = $_POST["mdl_comentarios"];
$fecha_movimiento = date("Y-m-d H:i:s");
$motivo_movimiento="Se agrega nuevo afiliado.";
//$usuario_movimiento = $_SESSION["usuario_id"];
$usuario_movimiento = 1;

$afiliado= new Afiliado(
    $mdl_nombre,
    $mdl_apaterno,
    $mdl_amaterno,
    $mdl_localidad,
    $mdl_seccion,
    $mdl_direccion,
    $mdl_cp,
    $mdl_tel_celular,
    $mdl_tel_alterno,
    $mdl_email,
    $mdl_comentarios,
    $fecha_movimiento,
    $motivo_movimiento,
    $usuario_movimiento
);

$controller=new ControllerAfiliado();
$controller->registrarAfiliado($afiliado);

?>