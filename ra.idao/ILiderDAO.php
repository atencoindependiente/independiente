<?php
require_once('../ra.model/Lider.class.php');
interface ILiderDAO {    
    function registrarLider(Lider $lider);
    function mostrarNombreLideres();
}