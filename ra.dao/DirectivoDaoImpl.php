<?php 
require_once('../ra.idao/IDirectivoDAO.php');
require_once('../ra.model/Directivo.class.php');
//require_once('../ra.model/Boton.php');
require_once("../ra.data/DatosBD.php");

 class DirectivoDaoImpl implements IDirectivoDao{
    function mostrarDirectivo(){
        $datosDB = new DatosBD();
        $connect = $datosDB->connect();

        //$query = "SELECT * FROM view_afiliados WHERE afil_visible=1";
        $query = "SELECT dire_id, CONCAT(dire_nombre, dire_apaterno, dire_amaterno) AS dire_nombre_completo, dire_seccion, dire_direccion, dire_tel_celular FROM directivo WHERE dire_visible=1";
        $result = mysqli_query($connect, $query);
        
        $directivo = array();
        
        if (mysqli_num_rows($result) > 0)
            while (($fila = mysqli_fetch_array($result)) != NULL) {
                $dire_id = $fila['dire_id'];
                $dire_nombre_completo = preg_replace('/[\x00-\x1F]/', '\n', addslashes($fila['dire_nombre_completo']));
                $dire_seccion = $fila['dire_seccion'];
                $dire_direccion = preg_replace('/[\x00-\x1F]/', '\n', addslashes($fila['dire_direccion']));
                $dire_tel_celular = $fila['dire_tel_celular'];
                $dire_accion='Sin acción';

                $directivo[] = array(
                                    'dire_id' => $dire_id,
                                    'dire_nombre_completo' => $dire_nombre_completo,
                                    'dire_seccion' => $dire_seccion,
                                    'dire_direccion' => $dire_direccion,
                                    'dire_tel_celular' => $dire_tel_celular,
                                    'dire_accion' => $dire_accion
                                 );
            }
        //echo json_encode($afiliado);
        print_r(json_encode(array('data'=> $directivo)));
        //mysqli_free_result($result);
        mysqli_close($connect);
    }

    function registrarDirectivo(Directivo $directivo){
        $mdl_nombre = $directivo->getNombre();
        $mdl_apaterno = $directivo->getAPaterno();
        $mdl_amaterno = $directivo->getAMaterno();
        $mdl_localidad = $directivo->getLocalidad();
        $mdl_seccion = $directivo->getSeccion();
        $mdl_direccion = $directivo->getDireccion();
        $mdl_cp = $directivo->getCP();
        $mdl_tel_celular = $directivo->getTelefonoCelular();
        $mdl_email = $directivo->getEmail();
        $mdl_comentarios = $directivo->getComentario();
        $fecha_movimiento = $directivo->getFechaMovimiento();
        $motivo_movimiento = $directivo->getMotivoMovimiento();
        $usuario_movimiento = $directivo->getUsuarioMovimiento();

        $datosDB = new DatosBD();
        $connect = $datosDB->connect();
        $query = "INSERT INTO directivo(dire_nombre, dire_apaterno, dire_amaterno, dire_localidad, dire_seccion, dire_direccion, dire_cp, dire_tel_celular, dire_correo, dire_comentario, dire_visible, dire_fecha_movimiento, dire_motivo_movimiento, dire_fk_usuario_movimiento) VALUES ('".$mdl_nombre."','".$mdl_apaterno."','".$mdl_amaterno."','".$mdl_localidad."','".$mdl_seccion."','".$mdl_direccion."','".$mdl_cp."','".$mdl_tel_celular."','".$mdl_email."','".$mdl_comentarios."',1,'".$fecha_movimiento."','".$motivo_movimiento."','".$usuario_movimiento."')";
        $result=mysqli_query($connect, $query);
          if ($result){
            $arrayResult=array('sucess'=>true);
          }else{
            $arrayResult=array('sucess'=>$result);
          }
        echo json_encode($arrayResult);
        $connect->close();
    }

    function mostrarNombreDirectivos(){
      $datosDB = new DatosBD();
      $connect = $datosDB->connect();
      $query = "SELECT * FROM view_directores_nombre_completo";
      $directivo = array();
      
      $result = mysqli_query($connect, $query);
      if($result){
        if (mysqli_num_rows($result) > 0)
        {
          while (($fila = mysqli_fetch_array($result)) != NULL) 
          {   
            $dire_id=$fila['dire_id'];
            $dire_nombre_completo = $fila['dire_nombre_completo'];

            $directivo[] = array(
              "dire_id" => $dire_id,
              "dire_nombre_completo" => $dire_nombre_completo
            );
          }
          $resultJson = array('success'=>true, 'result'=>$directivo);
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


