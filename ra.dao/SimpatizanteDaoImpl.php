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

    function mostrarSimpatizanteIne(){
      $datosDB = new DatosBD();
      $connect = $datosDB->connect();

      //$query = "SELECT * FROM view_afiliados WHERE afil_visible=1";
      $query = "SELECT * FROM view_simpatizante";
      $result = mysqli_query($connect, $query);
      
      $simp = array();
      
      if (mysqli_num_rows($result) > 0)
          while (($fila = mysqli_fetch_array($result)) != NULL) {
              $simp_id = $fila['simp_id'];
              $simp_nombre_completo = preg_replace('/[\x00-\x1F]/', '\n', addslashes($fila['simp_nombre_completo']));
              $simp_seccion = $fila['simp_seccion'];
              $simp_direccion = preg_replace('/[\x00-\x1F]/', '\n', addslashes($fila['simp_direccion']));
              $simp_tel_celular = $fila['simp_tel_celular'];
              $coor_nombre_completo = $fila['coor_nombre_completo'];
              $lide_nombre_completo = $fila['lide_nombre_completo'];
              $simp_accion='Sin acción';

              $simp[] = array(
                            'simp_id' => $simp_id,
                            'simp_nombre_completo' => $simp_nombre_completo,
                            'simp_seccion' => $simp_seccion,
                            'simp_direccion' => $simp_direccion,
                            'simp_tel_celular' => $simp_tel_celular,
                            'coor_nombre_completo' => $coor_nombre_completo,
                            'lide_nombre_completo' => $lide_nombre_completo
                          );
          }
      //echo json_encode($afiliado);
      print_r(json_encode(array('data'=> $simp)));
      //mysqli_free_result($result);
      mysqli_close($connect);
    }

    function mostrarSimpatizante(){
      $datosDB = new DatosBD();
      $connect = $datosDB->connect();

      //$query = "SELECT * FROM view_afiliados WHERE afil_visible=1";
      $query = "SELECT * FROM view_simpatizante_ine";
      $result = mysqli_query($connect, $query);
      
      $simp = array();
      
      if (mysqli_num_rows($result) > 0)
          while (($fila = mysqli_fetch_array($result)) != NULL) {
              $simpine_id = $fila['simpine_id'];
              $simpine_nombre_completo = preg_replace('/[\x00-\x1F]/', '\n', addslashes($fila['simpine_nombre_completo']));
              $simpine_seccion = $fila['simpine_seccion'];
              $simpine_comentario = preg_replace('/[\x00-\x1F]/', '\n', addslashes($fila['simpine_comentario']));
              $simpine_fecha_movimiento = preg_replace('/[\x00-\x1F]/', '\n', addslashes($fila['simpine_fecha_movimiento']));

              $simp[] = array(
                            'simpine_id' => $simpine_id,
                            'simpine_nombre_completo' => $simpine_nombre_completo,
                            'simpine_seccion' => $simpine_seccion,
                            'simpine_comentario' => $simpine_comentario,
                            'simpine_fecha_movimiento'=>$simpine_fecha_movimiento
                          );
          }
      //echo json_encode($afiliado);
      print_r(json_encode(array('data'=> $simp)));
      //mysqli_free_result($result);
      mysqli_close($connect);
    }

    function mostrarSimpatizanteEnListaNominal(){
      $datosDB = new DatosBD();
      $connect = $datosDB->connect();

      //$query = "SELECT * FROM view_afiliados WHERE afil_visible=1";
      $query = "SELECT * FROM view_simpatizante_ine_en_lista_nominal";
      $result = mysqli_query($connect, $query);
      
      $simp_lista = array();
      
      if (mysqli_num_rows($result) > 0)
          while (($fila = mysqli_fetch_array($result)) != NULL) {
              $simpinelisnom_nombre_completo = preg_replace('/[\x00-\x1F]/', '\n', addslashes($fila['simpinelisnom_nombre_completo']));
              $simpinelisnom_seccion = $fila['simpinelisnom_seccion'];

              $simp_lista[] = array(
                            'simpinelisnom_nombre_completo' => $simpinelisnom_nombre_completo,
                            'simpinelisnom_seccion' => $simpinelisnom_seccion
                          );
          }
      //echo json_encode($afiliado);
      print_r(json_encode(array('data'=> $simp_lista)));
      //mysqli_free_result($result);
      mysqli_close($connect);
    }
}


?>