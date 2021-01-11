<?php 
require_once('../ra.dao/UsuarioDaoImpl.php');

class ControllerUsuario {
    
    function login(Usuario $usuario) {
        $dao = new UsuarioDaoImpl();
        return $dao->consultarLogin($usuario);
    }
}
?>