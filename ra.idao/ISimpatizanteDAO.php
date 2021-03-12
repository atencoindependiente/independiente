<?php
require_once('../ra.model/Simpatizante.class.php');
interface ISimpatizanteDAO {    
    function registrarSimpatizante(Simpatizante $simpatizante);
    function editarSimpatizante(EditarSimpatizante $simpatizante);
    function mostrarSimpatizante();
    function mostrarSimpatizanteIne();
    function mostrarSimpatizanteEnListaNominal();
}