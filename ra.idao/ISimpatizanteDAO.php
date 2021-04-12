<?php
require_once('../ra.model/Simpatizante.class.php');
interface ISimpatizanteDAO {    
    function registrarSimpatizante(Simpatizante $simpatizante);
    function editarSimpatizante(EditarSimpatizante $simpatizante);
    function mostrarSimpatizante();
    function mostrarSimpatizanteIne();
    function mostrarSimpatizanteEnListaNominal();
    function eliminarSimpatizante($mdl_simpine_id,$fecha_movimiento,$motivo_movimiento,$usuario_movimiento);
}