<?php
require_once('../ra.model/Usuario.class.php');

interface IUsuarioDao {    
	public function consultarLogin(Usuario $usuario);
    
}
?>