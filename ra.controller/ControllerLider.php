<?php 
require_once('../ra.dao/LiderDaoImpl.php');

class ControllerLider {
    
    function mostrarLider() {
        $dao = new LiderDaoImpl();
        $dao->mostrarLider();
    }

    function registrarLider(Lider $lider){
        $dao = new LiderDaoImpl();
        $dao->registrarLider($lider);
    }

    function mostrarNombreLideres(){
        $dao = new LiderDaoImpl();
        $dao->mostrarNombreLideres();
    }
}
?>