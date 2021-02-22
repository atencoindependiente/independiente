<?php 
require_once('../ra.idao/ICoordinadorDAO.php');
require_once('../ra.model/Coordinador.class.php');
//require_once('../ra.model/Boton.php');
require_once("../ra.data/DatosBD.php");

class CoordinadorDaoImpl implements ICoordinadorDAO{
    function registrarCoordinador(Coordinador $coordinador){
        $mdl_nombre = $coordinador->getNombre();
        $mdl_apaterno = $coordinador->getAPaterno();
        $mdl_amaterno = $coordinador->getAMaterno();
        $mdl_localidad = $coordinador->getLocalidad();
        $mdl_seccion = $coordinador->getSeccion();
        $mdl_direccion = $coordinador->getDireccion();
        $mdl_cp = $coordinador->getCP();
        $mdl_tel_celular = $coordinador->getTelefonoCelular();
        $mdl_comentarios = $coordinador->getComentario();
        $fecha_movimiento = $coordinador->getFechaMovimiento();
        $motivo_movimiento = $coordinador->getMotivoMovimiento();
        $usuario_movimiento = $coordinador->getUsuarioMovimiento();
        $directivo_id=$coordinador->getDirectivoId();
        $lider_id=$coordinador->getLiderId();

        $datosDB = new DatosBD();
        $connect = $datosDB->connect();
        $query = "INSERT INTO coordinador(coor_nombre, coor_apaterno, coor_amaterno, coor_localidad, coor_seccion, coor_direccion, coor_cp, coor_tel_celular, coor_comentario, coor_visible, coor_fecha_movimiento, coor_motivo_movimiento, coor_fk_directivo, coor_fk_lider, coor_fk_usuario_movimiento) VALUES ('".$mdl_nombre."','".$mdl_apaterno."','".$mdl_amaterno."','".$mdl_localidad."','".$mdl_seccion."','".$mdl_direccion."','".$mdl_cp."','".$mdl_tel_celular."','".$mdl_comentarios."',1,'".$fecha_movimiento."','".$motivo_movimiento."','".$directivo_id."','".$lider_id."','".$usuario_movimiento."')";
        $result=mysqli_query($connect, $query);
          if ($result){
            $arrayResult=array('sucess'=>true);
          }else{
            $arrayResult=array('sucess'=>$result);
          }
        echo json_encode($arrayResult);
        $connect->close();
    }

    function mostrarNombreCoordinadores(){
        $datosDB = new DatosBD();
        $connect = $datosDB->connect();
        $query = "SELECT * FROM view_coordinador_nombre_completo";
        $coordinador = array();
        
        $result = mysqli_query($connect, $query);
        if($result){
          if (mysqli_num_rows($result) > 0)
          {
            while (($fila = mysqli_fetch_array($result)) != NULL) 
            {   
              $coor_id=$fila['coor_id'];
              $coor_nombre_completo = $fila['coor_nombre_completo'];
  
              $coordinador[] = array(
                "coor_id" => $coor_id,
                "coor_nombre_completo" => $coor_nombre_completo
              );
            }
            $resultJson = array('success'=>true, 'result'=>$coordinador);
          }else {
            $resultJson = array('success'=>false, 'result'=>'0');
            }
        }else{
            $resultJson = array('success'=>false, 'result'=>false);
        }
        print_r(json_encode($resultJson));
        mysqli_close($connect);
    }
}
?>