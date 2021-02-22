<?php
require_once('../ra.model/Coordinador.class.php');
interface ICoordinadorDAO {    
    function registrarCoordinador(Coordinador $coordinador);
    function mostrarNombreCoordinadores();

}