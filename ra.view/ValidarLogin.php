<?php 
//error_reporting(5);
require_once('../ra.model/Usuario.class.php');
require_once('../ra.controller/ControllerUsuario.php');
 
$inp_usuario = $_POST['usuario'];
$inp_contrasena = $_POST['contrasena'];

$usuario = new Usuario("", $inp_usuario, $inp_contrasena, "", "", "", "", "", "","","","","","");
$controllerUsuario = new ControllerUsuario();

$result = $controllerUsuario->login($usuario);
echo $result;
//echo $usuario->getTipo();

?>