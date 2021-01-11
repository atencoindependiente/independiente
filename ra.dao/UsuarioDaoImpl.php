<?php
require_once('../ra.idao/IUsuarioDAO.php');
require_once('../ra.model/Usuario.class.php');
require_once("../ra.data/serverpath.php");
require_once("../ra.data/DatosBD.php");

class UsuarioDaoImpl implements IUsuarioDAO
{
    public function consultarLogin(Usuario $usuario){
		$query = "SELECT * FROM usuario WHERE usua_fs_cata_estatus=1 AND usua_visible=1 AND usua_login = '".$usuario->getLogin()."' AND usua_contrasena = MD5('".$usuario->getContrasena()."')";
		$datosBD = new DatosBD();
		$connect = $datosBD->connect();

        $result = mysqli_query($connect, $query);
        if ($result) {
            $num_row = mysqli_num_rows($result);
            	$row = mysqli_fetch_array($result);
            	if ($num_row > 0) {            		
            		$usuario->setTipo($row['usua_tipo']);
            		$usuario->setId($row['usua_id']);

                    $resultJson = array('usu_result'=>true);
            		session_start();
            		$_SESSION['usuario_id'] = $row['usua_id'];
            		$_SESSION['usuario_tipo'] = $row['usua_tipo'];
            		$_SESSION['usuario_login'] = $usuario->getLogin();
            		$_SESSION['usuario_nombre'] = $row['usua_nombre'];
            		
            	}else{
            		$resultJson = array('usu_result'=>false);
            	}
        }else{
        	$resultJson = array('usu_result'=>false);
        }
        return json_encode($resultJson);
        $connect->close();
	}

}

?>