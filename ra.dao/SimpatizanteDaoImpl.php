<?php 
require_once('../ra.idao/ISimpatizanteDAO.php');
require_once('../ra.model/Simpatizante.class.php');
require_once('../ra.model/Botones.php');
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

    function editarSimpatizante(EditarSimpatizante $simpatizante){

      $mdl_simpine_id = $simpatizante->getId();
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
      $query = "UPDATE simpatizante_ine SET simpine_localidad='".$mdl_localidad."', simpine_direccion='".$mdl_direccion."', simpine_cp='".$mdl_cp."', simpine_tel_celular='".$mdl_tel_celular."', simpine_fecha_movimiento='".$fecha_movimiento."', simpine_motivo_movimiento='".$motivo_movimiento."', simpine_fk_directivo='".$directivo_id."', simpine_fk_lider='".$lider_id."', simpine_fk_coordinador='".$coordinador_id."', simpine_fk_usuario_movimiento='".$usuario_movimiento."', simpine_visible=0 WHERE simpine_id='".$mdl_simpine_id."'";
      $result=mysqli_query($connect, $query);
        if ($result){
          $arrayResult=array('sucess'=>true);
        }else{
          $arrayResult=array('sucess'=>$result);
        }
      echo json_encode($arrayResult);
      $connect->close();
    }

    function mostrarSimpatizante(){
      $datosDB = new DatosBD();
      $botones = new Botones();
      $connect = $datosDB->connect();

      //$query = "SELECT * FROM view_afiliados WHERE afil_visible=1";
      $query = "SELECT * FROM view_simpatizante";
      $result = mysqli_query($connect, $query);
      
      $simp = array();
      
      if (mysqli_num_rows($result) > 0)
          while (($fila = mysqli_fetch_array($result)) != NULL) {
              $simp_id = $fila['simp_id'];
              $simp_nombre_completo = preg_replace('/[\x00-\x1F]/', '\n', addslashes($fila['simp_nombre_completo']));
              if($fila['simp_genero']==='DEFAULT'){
                $simp_genero = 'Asignar';
              }else{
                $simp_genero =$fila['simp_genero'];
              }
              $simp_seccion = $fila['simp_seccion'];
              $simp_direccion = preg_replace('/[\x00-\x1F]/', '\n', addslashes($fila['simp_direccion']));
              $simp_tel_celular = $fila['simp_tel_celular'];
              if($fila['simp_comite']==='DEFAULT'){
                $simp_en_comite = 'Sin comite';
              }else{
                $simp_en_comite =$fila['simp_comite'];
              }
              $coor_nombre_completo = $fila['coor_nombre_completo'].", ".$fila['lide_nombre_completo'].", ".$fila['dire_nombre_completo'];
              //$lide_nombre_completo = $fila['lide_nombre_completo'];
              //$dire_nombre_completo = $fila['dire_nombre_completo'];

              if($fila['simp_genero']==='DEFAULT'){
                $btn_genero=str_replace('simp_id', $fila['simp_id'], $botones->getBotonGeneroMasculinoSimpatizante()).' '.str_replace('simp_id', $fila['simp_id'], $botones->getBotonGeneroFemeninoSimpatizante());
              }else{
                $btn_genero='';
              }
              if($fila['simp_comite']==='DEFAULT'){
                $btn_comite=str_replace('simp_id', $fila['simp_id'], $botones->getBotonComiteSimpatizante());
              }else{
                $btn_comite=$botones->getBotonComiteSimpatizanteVisitado();
              }
              
              $boton_elimina_simp=str_replace('simp_id', $fila['simp_id'], $botones->getBotonEliminarSimpatizante());
              //$boton_accion= str_replace('simp_id', $fila['simp_id'], $botones->getBotonEditarSimpatizante());
              $boton_accion=$btn_genero." ".$btn_comite." ".$boton_elimina_simp;

              $simp[] = array(
                            'simp_id' => $simp_id,
                            'simp_nombre_completo' => $simp_nombre_completo,
                            'simp_genero' => $simp_genero,
                            'simp_seccion' => $simp_seccion,
                            'simp_direccion' => $simp_direccion,
                            'simp_tel_celular' => $simp_tel_celular,
                            'simp_en_comite' => $simp_en_comite,
                            'coor_nombre_completo' => $coor_nombre_completo,
                            //'lide_nombre_completo' => $lide_nombre_completo,
                            //'dire_nombre_completo' => $dire_nombre_completo,
                            'simp_accion' => $boton_accion
                          );
          }
      //echo json_encode($afiliado);
      print_r(json_encode(array('data'=> $simp)));
      //mysqli_free_result($result);
      mysqli_close($connect);
    }

    function mostrarSimpatizanteIne(){
      $datosDB = new DatosBD();
      $connect = $datosDB->connect();
      $botones = new Botones();

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
              $boton_accion= str_replace('simpine_id', $fila['simpine_id'], $botones->getBotonEditarSimpatizanteIne())." ".str_replace('simpine_id', $fila['simpine_id'], $botones->getBotonEliminarSimpatizanteIne());

              $simp[] = array(
                            'simpine_id' => $simpine_id,
                            'simpine_nombre_completo' => $simpine_nombre_completo,
                            'simpine_seccion' => $simpine_seccion,
                            'simpine_comentario' => $simpine_comentario,
                            'simpine_fecha_movimiento'=>$simpine_fecha_movimiento,
                            'simp_accion' => $boton_accion
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

    function mostrarEditarSimpatizanteIne($simpine_id){
      $datosDB = new DatosBD();
      $connect = $datosDB->connect();

      //$query = "SELECT * FROM view_afiliados WHERE afil_visible=1";
      $query = "SELECT * FROM simpatizante_ine WHERE simpine_visible=1 AND simpine_id='".$simpine_id."'";
      $result = mysqli_query($connect, $query);
      
      $simpine = array();
      
      if (mysqli_num_rows($result) > 0){
        while (($fila = mysqli_fetch_array($result)) != NULL) {
          $simpine_id = $fila['simpine_id'];
          $simpine_nombre = preg_replace('/[\x00-\x1F]/', '\n', addslashes($fila['simpine_nombre']));
          $simpine_apaterno = preg_replace('/[\x00-\x1F]/', '\n', addslashes($fila['simpine_apaterno']));
          $simpine_amaterno = preg_replace('/[\x00-\x1F]/', '\n', addslashes($fila['simpine_amaterno']));
          $simpine_seccion = preg_replace('/[\x00-\x1F]/', '\n', addslashes($fila['simpine_seccion']));
          $simpine_direccion = preg_replace('/[\x00-\x1F]/', '\n', addslashes($fila['simpine_direccion']));
          $simpine_cp = preg_replace('/[\x00-\x1F]/', '\n', addslashes($fila['simpine_cp']));
          $simpine_tel_celular = preg_replace('/[\x00-\x1F]/', '\n', addslashes($fila['simpine_tel_celular']));
          $simpine_comentario = preg_replace('/[\x00-\x1F]/', '\n', addslashes($fila['simpine_comentario']));
        
          $simpine[] = array(
                        'simpine_id' => $simpine_id,
                        'simpine_nombre' => $simpine_nombre,
                        'simpine_apaterno' => $simpine_apaterno,
                        'simpine_amaterno' => $simpine_amaterno,
                        'simpine_seccion' => $simpine_seccion,
                        'simpine_direccion' => $simpine_direccion,
                        'simpine_cp' => $simpine_cp,
                        'simpine_tel_celular' => $simpine_tel_celular,
                        'simpine_comentario' => $simpine_comentario
                      );
        }
        //echo json_encode($afiliado);
        print_r(json_encode(array('success' => true, 'result'=> $simpine)));
        //mysqli_free_result($result);
      }else{
        //echo json_encode($afiliado);
        print_r(json_encode(array('success' => false, 'result'=>'')));
        //mysqli_free_result($result);
      }
     
      mysqli_close($connect);
    }

    function eliminarSimpatizanteIne($mdl_simpine_id,$fecha_movimiento,$motivo_movimiento,$usuario_movimiento){
      $datosDB = new DatosBD();
      $connect = $datosDB->connect();
      $query = "UPDATE simpatizante_ine SET simpine_visible=0, simpine_fecha_movimiento='".$fecha_movimiento."', simpine_motivo_movimiento='".$motivo_movimiento."', simpine_fk_usuario_movimiento='".$usuario_movimiento."' WHERE simpine_id='".$mdl_simpine_id."'";
      $result=mysqli_query($connect, $query);
        if ($result){
          $arrayResult=array('sucess'=>true);
        }else{
          $arrayResult=array('sucess'=>$result);
        }
      echo json_encode($arrayResult);
      $connect->close();
    }

    function eliminarSimpatizante($simp_id,$fecha_movimiento,$motivo_movimiento,$usuario_movimiento){
      $datosDB = new DatosBD();
      $connect = $datosDB->connect();
      $query = "UPDATE simpatizante SET simp_visible=0, simp_fecha_movimiento='".$fecha_movimiento."', simp_motivo_movimiento='".$motivo_movimiento."', simp_fk_usuario_movimiento='".$usuario_movimiento."' WHERE simp_id='".$simp_id."'";
      $result=mysqli_query($connect, $query);
        if ($result){
          $arrayResult=array('sucess'=>true);
        }else{
          $arrayResult=array('sucess'=>$result);
        }
      echo json_encode($arrayResult);
      $connect->close();
    }

    function primerComiteSimpatizante($simp_id,$fecha_movimiento,$motivo_movimiento,$usuario_movimiento){
      $datosDB = new DatosBD();
      $connect = $datosDB->connect();
      $query = "UPDATE simpatizante SET simp_comite='Visitado', simp_fecha_movimiento='".$fecha_movimiento."', simp_motivo_movimiento='".$motivo_movimiento."', simp_fk_usuario_movimiento='".$usuario_movimiento."' WHERE simp_id='".$simp_id."'";
      $result=mysqli_query($connect, $query);
        if ($result){
          $arrayResult=array('sucess'=>true);
        }else{
          $arrayResult=array('sucess'=>$result);
        }
      echo json_encode($arrayResult);
      $connect->close();
    } 

    function actualizarGeneroMasculinoView($simp_id){
      $datosDB = new DatosBD();
      $connect = $datosDB->connect();
      $query = "UPDATE simpatizante SET simp_genero='Masculino' WHERE simp_id='".$simp_id."'";
      $result=mysqli_query($connect, $query);
        if ($result){
          $arrayResult=array('sucess'=>true);
        }else{
          $arrayResult=array('sucess'=>$result);
        }
      echo json_encode($arrayResult);
      $connect->close();
    }

    function actualizarGeneroFemeninoView($simp_id){
      $datosDB = new DatosBD();
      $connect = $datosDB->connect();
      $query = "UPDATE simpatizante SET simp_genero='Femenino' WHERE simp_id='".$simp_id."'";
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