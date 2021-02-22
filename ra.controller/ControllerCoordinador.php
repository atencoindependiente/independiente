<?php 
require_once('../ra.dao/CoordinadorDaoImpl.php');

class ControllerCoordinador {
    
    function mostrarCoordinador() {
        $dao = new CoordinadorDaoImpl();
        $dao->mostrarCoordinador();
    }

    function registrarCoordinador(Coordinador $coordinador){
        $dao = new CoordinadorDaoImpl();
        $dao->registrarCoordinador($coordinador);
    }

    function mostrarNombreCoordinadores(){
        $dao = new CoordinadorDaoImpl();
        $dao->mostrarNombreCoordinadores();
    }
}
?>