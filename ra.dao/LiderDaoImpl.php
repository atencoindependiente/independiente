<?php 
require_once('../ra.idao/ILiderDAO.php');
require_once('../ra.model/Lider.class.php');
//require_once('../ra.model/Boton.php');
require_once("../ra.data/DatosBD.php");

class LiderDaoImpl implements ILiderDao{
    function registrarLider(Lider $lider){
        $mdl_nombre = $lider->getNombre();
        $mdl_apaterno = $lider->getAPaterno();
        $mdl_amaterno = $lider->getAMaterno();
        $mdl_localidad = $lider->getLocalidad();
        $mdl_seccion = $lider->getSeccion();
        $mdl_direccion = $lider->getDireccion();
        $mdl_cp = $lider->getCP();
        $mdl_tel_celular = $lider->getTelefonoCelular();
        $mdl_comentarios = $lider->getComentario();
        $fecha_movimiento = $lider->getFechaMovimiento();
        $motivo_movimiento = $lider->getMotivoMovimiento();
        $usuario_movimiento = $lider->getUsuarioMovimiento();
        $directivo_id=$lider->getDirectivoId();

        $datosDB = new DatosBD();
        $connect = $datosDB->connect();
        $query = "INSERT INTO lider(lide_nombre, lide_apaterno, lide_amaterno, lide_localidad, lide_seccion, lide_direccion, lide_cp, lide_tel_celular, lide_comentario, lide_visible, lide_fecha_movimiento, lide_motivo_movimiento, lide_fk_directivo, lide_fk_usuario_movimiento) VALUES ('".$mdl_nombre."','".$mdl_apaterno."','".$mdl_amaterno."','".$mdl_localidad."','".$mdl_seccion."','".$mdl_direccion."','".$mdl_cp."','".$mdl_tel_celular."','".$mdl_comentarios."',1,'".$fecha_movimiento."','".$motivo_movimiento."','".$directivo_id."','".$usuario_movimiento."')";
        $result=mysqli_query($connect, $query);
          if ($result){
            $arrayResult=array('sucess'=>true);
          }else{
            $arrayResult=array('sucess'=>$result);
          }
        echo json_encode($arrayResult);
        $connect->close();
    }

    function mostrarNombreLideres(){
      $datosDB = new DatosBD();
      $connect = $datosDB->connect();
      $query = "SELECT * FROM view_lideres_nombre_completo";
      $lider = array();
      
      $result = mysqli_query($connect, $query);
      if($result){
        if (mysqli_num_rows($result) > 0)
        {
          while (($fila = mysqli_fetch_array($result)) != NULL) 
          {   
            $lide_id=$fila['lide_id'];
            $lide_nombre_completo = $fila['lide_nombre_completo'];

            $lider[] = array(
              "lide_id" => $lide_id,
              "lide_nombre_completo" => $lide_nombre_completo
            );
          }
          $resultJson = array('success'=>true, 'result'=>$lider);
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