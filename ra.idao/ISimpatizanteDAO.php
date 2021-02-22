<?php
require_once('../ra.model/Simpatizante.class.php');
interface ISimpatizanteDAO {    
    function registrarSimpatizante(Simpatizante $simpatizante);
}