<?php 
require_once('../ra.dao/SimpatizanteDaoImpl.php');

class ControllerSimpatizante {
    
    function mostrarSimpatizante() {
        $dao = new SimpatizanteDaoImpl();
        $dao->mostrarSimpatizante();
    }

    function registrarSimpatizante(Simpatizante $simpatizante){
        $dao = new SimpatizanteDaoImpl();
        $dao->registrarSimpatizante($simpatizante);
    }
}
?>