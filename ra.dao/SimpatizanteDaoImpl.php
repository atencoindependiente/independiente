<?php 
require_once('../ra.idao/ISimpatizanteDAO.php');
require_once('../ra.model/Simpatizante.class.php');
//require_once('../ra.model/Boton.php');
require_once("../ra.data/DatosBD.php");

class SimpatizanteDaoImpl implements ISimpatizanteDAO{
    function registrarSimpatizante(Simpatizante $simpatizante){
        $mdl_nombre = $simpatizante->getNombre();
        $mdl_apaterno = $simpatizante->getAPaterno();
        $mdl_amaterno = $simpatizante->getAMaterno();
        $mdl_localidad = $simpatizante->getLocalidad();
        $mdl_seccion = $simpatizante->getSeccion();
        $mdl_direccion = $simpatizante->getDireccion();
        $mdl_cp = $simpatizante->getCP();
        $mdl_tel_celular = $simpatizante->getTelefonoCelular();
        $mdl_comentarios = $simpatizante->getComentario();
        $fecha_movimiento = $simpatizante->getFechaMovimiento();
        $motivo_movimiento = $simpatizante->getMotivoMovimiento();
        $usuario_movimiento = $simpatizante->getUsuarioMovimiento();
        $directivo_id=$simpatizante->getDirectivoId();
        $lider_id=$simpatizante->getLiderId();
        $coordinador_id=$simpatizante->getCoordinadorId();

        $datosDB = new DatosBD();
        $connect = $datosDB->connect();
        $query = "INSERT INTO simpatizante(simp_nombre, simp_apaterno, simp_amaterno, simp_localidad, simp_seccion, simp_direccion, simp_cp, simp_tel_celular, simp_comentario, simp_visible, simp_fecha_movimiento, simp_motivo_movimiento, simp_fk_directivo, simp_fk_lider, simp_fk_coordinador, simp_fk_usuario_movimiento) VALUES ('".$mdl_nombre."','".$mdl_apaterno."','".$mdl_amaterno."','".$mdl_localidad."','".$mdl_seccion."','".$mdl_direccion."','".$mdl_cp."','".$mdl_tel_celular."','".$mdl_comentarios."',1,'".$fecha_movimiento."','".$motivo_movimiento."','".$directivo_id."','".$lider_id."','".$coordinador_id."','".$usuario_movimiento."')";
        $result=mysqli_query($connect, $query);
          if ($result){
            $arrayResult=array('sucess'=>true);
          }else{
            $arrayResult=array('sucess'=>$result);
          }
        echo json_encode($arrayResult);
        $connect->close();
    }
}
?>