<?php 
require_once('../ra.dao/AfiliadoDaoImpl.php');

class ControllerAfiliado {
    
    function mostrarAfiliados() {
        $dao = new AfiliadoDaoImpl();
        $dao->mostrarAfiliados();
    }

    function registrarAfiliado(Afiliado $afiliado){
        $dao = new AfiliadoDaoImpl();
        $dao->registrarAfiliado($afiliado);
    }
}
?>