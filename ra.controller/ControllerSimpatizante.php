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

    function editarSimpatizanteIne(EditarSimpatizanteIne $simpatizante){
        $dao = new SimpatizanteDaoImpl();
        $dao->editarSimpatizanteIne($simpatizante);
    }

    function mostrarSimpatizanteEnListaNominal(){
        $dao = new SimpatizanteDaoImpl();
        $dao->mostrarSimpatizanteEnListaNominal();
    }

    function mostrarEditarSimpatizanteIne($simpine_id){
        $dao = new SimpatizanteDaoImpl();
        $dao->mostrarEditarSimpatizanteIne($simpine_id);
    }

    function mostrarEditarSimpatizante($simp_id){
        $dao = new SimpatizanteDaoImpl();
        $dao->mostrarEditarSimpatizante($simp_id);
    }

    function eliminarSimpatizanteIne($mdl_simpine_id,$fecha_movimiento,$motivo_movimiento,$usuario_movimiento){
        $dao = new SimpatizanteDaoImpl();
        $dao->eliminarSimpatizanteIne($mdl_simpine_id,$fecha_movimiento,$motivo_movimiento,$usuario_movimiento);
    }

    function eliminarSimpatizante($simp_id,$fecha_movimiento,$motivo_movimiento,$usuario_movimiento){
        $dao = new SimpatizanteDaoImpl();
        $dao->eliminarSimpatizante($simp_id,$fecha_movimiento,$motivo_movimiento,$usuario_movimiento);
    }

    function primerComiteSimpatizante($simp_id,$fecha_movimiento,$motivo_movimiento,$usuario_movimiento){
        $dao = new SimpatizanteDaoImpl();
        $dao->primerComiteSimpatizante($simp_id,$fecha_movimiento,$motivo_movimiento,$usuario_movimiento);
    }

    function actualizarGeneroMasculinoView($simp_id){
        $dao = new SimpatizanteDaoImpl();
        $dao->actualizarGeneroMasculinoView($simp_id);
    }

    function actualizarGeneroFemeninoView($simp_id){
        $dao = new SimpatizanteDaoImpl();
        $dao->actualizarGeneroFemeninoView($simp_id);
    }
}
?>