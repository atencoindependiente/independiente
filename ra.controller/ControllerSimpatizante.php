<?php 
require_once('../ra.dao/SimpatizanteDaoImpl.php');

class ControllerSimpatizante {
    
    function mostrarSimpatizante() {
        $dao = new SimpatizanteDaoImpl();
        $dao->mostrarSimpatizante();
    }

    function mostrarSimpatizanteIne() {
        $dao = new SimpatizanteDaoImpl();
        $dao->mostrarSimpatizanteIne();
    }

    function registrarSimpatizante(Simpatizante $simpatizante){
        $dao = new SimpatizanteDaoImpl();
        $dao->registrarSimpatizante($simpatizante);
    }

    function editarSimpatizante(EditarSimpatizante $simpatizante){
        $dao = new SimpatizanteDaoImpl();
        $dao->editarSimpatizante($simpatizante);
    }

    function mostrarSimpatizanteEnListaNominal(){
        $dao = new SimpatizanteDaoImpl();
        $dao->mostrarSimpatizanteEnListaNominal();
    }

    function mostrarEditarSimpatizanteIne($simpine_id){
        $dao = new SimpatizanteDaoImpl();
        $dao->mostrarEditarSimpatizanteIne($simpine_id);
    }
}
?>