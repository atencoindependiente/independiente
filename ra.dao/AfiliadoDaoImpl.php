<?php 
require_once('../ra.idao/IAfiliadoDAO.php');
//require_once('../ra.model/Boton.php');
require_once("../ra.data/DatosBD.php");

 class AfiliadoDaoImpl implements IAfiliadoDao{
    function mostrarAfiliados(){
        $datosDB = new DatosBD();
        $connect = $datosDB->connect();

        $query = "SELECT * FROM view_afiliados WHERE afil_visible=1";
        $result = mysqli_query($connect, $query);
        
        $afiliado = array();
        
        
        if (mysqli_num_rows($result) > 0)
            while (($fila = mysqli_fetch_array($result)) != NULL) {
                $afil_id = $fila['afil_id'];
                $afil_nombre_completo = preg_replace('/[\x00-\x1F]/', '\n', addslashes($fila['afil_nombre_completo']));
                $afil_seccion = $fila['afil_seccion'];
                $afil_direccion = preg_replace('/[\x00-\x1F]/', '\n', addslashes($fila['afil_direccion']));
                $afil_tel_celular = $fila['afil_tel_celular'];
                $afil_accion='Sin acción';

                $afiliado[] = array(
                                    'afil_id' => $afil_id,
                                    'afil_nombre_completo' => $afil_nombre_completo,
                                    'afil_seccion' => $afil_seccion,
                                    'afil_direccion' => $afil_direccion,
                                    'afil_tel_celular' => $afil_tel_celular,
                                    'afil_accion' => $afil_accion
                                 );
            }
        //echo json_encode($afiliado);
        print_r(json_encode(array('data'=> $afiliado)));
        //mysqli_free_result($result);
        mysqli_close($connect);
    }

    function registrarAfiliado(Afiliado $afiliado){
        $mdl_nombre = $afiliado->getNombre();
        $mdl_apaterno = $afiliado->getAPaterno();
        $mdl_amaterno = $afiliado->getAMaterno();
        $mdl_localidad = $afiliado->getLocalidad();
        $mdl_seccion = $afiliado->getSeccion();
        $mdl_direccion = $afiliado->getDireccion();
        $mdl_cp = $afiliado->getCP();
        $mdl_tel_celular = $afiliado->getTelefonoCelular();
        $mdl_tel_alterno = $afiliado->getTelefonoAlterno();
        $mdl_email = $afiliado->getEmail();
        $mdl_comentarios = $afiliado->getComentario();
        $fecha_movimiento = $afiliado->getFechaMovimiento();
        $motivo_movimiento = $afiliado->getMotivoMovimiento();
        $usuario_movimiento = $afiliado->getUsuarioMovimiento();


        $datosDB = new DatosBD();
        $connect = $datosDB->connect();
        $query = "INSERT INTO afiliado(afil_nombre, afil_apaterno, afil_amaterno, afil_localidad, afil_seccion, afil_direccion, afil_cp, afil_tel_celular, afil_tel_alterno, afil_correo, afil_comentario, afil_visible, afil_fecha_movimiento, afil_motivo_movimiento, afil_fk_usuario_movimiento) VALUES ('".$mdl_nombre."','".$mdl_apaterno."','".$mdl_amaterno."','".$mdl_localidad."','".$mdl_seccion."','".$mdl_direccion."','".$mdl_cp."','".$mdl_tel_celular."','".$mdl_tel_alterno."','".$mdl_email."','".$mdl_comentarios."',1,'".$fecha_movimiento."','".$motivo_movimiento."','".$usuario_movimiento."')";
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


