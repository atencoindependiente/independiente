<?php 
require_once('../ra.dao/DirectivoDaoImpl.php');

class ControllerDirectivo {
    
    function mostrarDirectivo() {
        $dao = new DirectivoDaoImpl();
        $dao->mostrarDirectivo();
    }

    function registrarDirectivo(Directivo $directivo){
        $dao = new DirectivoDaoImpl();
        $dao->registrarDirectivo($directivo);
    }

    function mostrarNombreDirectivos(){
        $dao = new DirectivoDaoImpl();
        $dao->mostrarNombreDirectivos();
    }
}
?>