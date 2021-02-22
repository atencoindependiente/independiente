<?php
class Simpatizante{
    private $mdl_nombre;
    private $mdl_apaterno;
    private $mdl_amaterno;
    private $mdl_localidad;
    private $mdl_seccion;
    private $mdl_direccion;
    private $mdl_cp;
    private $mdl_tel_celular;
    private $mdl_comentarios;
    private $fecha_movimiento;
    private $motivo_movimiento;
    private $usuario_movimiento;
    private $directivo_id;
    private $lider_id;
    private $coordinador_id;

    function __construct($mdl_nombre,$mdl_apaterno,$mdl_amaterno,$mdl_localidad,$mdl_seccion,$mdl_direccion,$mdl_cp,$mdl_tel_celular,$mdl_comentarios,$fecha_movimiento,$motivo_movimiento,$usuario_movimiento,$directivo_id,$lider_id,$coordinador_id)
    {
         $this->mdl_nombre=$mdl_nombre;
         $this->mdl_apaterno=$mdl_apaterno;
         $this->mdl_amaterno=$mdl_amaterno;
         $this->mdl_localidad=$mdl_localidad;
         $this->mdl_seccion=$mdl_seccion;
         $this->mdl_direccion=$mdl_direccion;
         $this->mdl_cp=$mdl_cp;
         $this->mdl_tel_celular=$mdl_tel_celular;
         $this->mdl_comentarios=$mdl_comentarios;
         $this->fecha_movimiento=$fecha_movimiento;
         $this->motivo_movimiento=$motivo_movimiento;
         $this->usuario_movimiento=$usuario_movimiento;
         $this->directivo_id=$directivo_id;
         $this->lider_id=$lider_id;
         $this->coordinador_id=$coordinador_id;
    }
    public function getNombre(){
		return $this->mdl_nombre;
    }
    public function getAPaterno(){
		return $this->mdl_apaterno;
    }
    public function getAMaterno(){
		return $this->mdl_amaterno;
    }
    public function getLocalidad(){
		return $this->mdl_localidad;
    }
    public function getSeccion(){
		return $this->mdl_seccion;
    }
    public function getDireccion(){
		return $this->mdl_direccion;
    }
    public function getCP(){
		return $this->mdl_cp;
    }
    public function getTelefonoCelular(){
		return $this->mdl_tel_celular;
    }
    public function getComentario(){
		return $this->mdl_comentarios;
    }
    public function getFechaMovimiento(){
		return $this->fecha_movimiento;
    }
    public function getMotivoMovimiento(){
		return $this->motivo_movimiento;
    }
    public function getUsuarioMovimiento(){
		return $this->usuario_movimiento;
    }
    public function getDirectivoId(){
      return $this->directivo_id;
    }
    public function getLiderId(){
        return $this->lider_id;
      }
    public function getCoordinadorId(){
        return $this->coordinador_id;
      }

    public function setNombre($mdl_nombre){
		$this->mdl_nombre = $mdl_nombre;
    }
    public function setAPaterno($mdl_apaterno){
		$this->mdl_apaterno = $mdl_apaterno;
    }
    public function setAMaterno($mdl_amaterno){
		$this->mdl_amaterno = $mdl_amaterno;
    }
    public function setLocalidad($mdl_localidad){
		$this->mdl_localidad = $mdl_localidad;
    }
    public function setSeccion($mdl_seccion){
		$this->mdl_seccion = $mdl_seccion;
    }
    public function setDireccion($mdl_direccion){
		$this->mdl_direccion = $mdl_direccion;
    }
    public function setCP($mdl_cp){
		$this->mdl_cp = $mdl_cp;
    }
    public function setTelefonoCelular($mdl_tel_celular){
		$this->mdl_tel_celular = $mdl_tel_celular;
    }
    public function setComentario($mdl_comentarios){
		$this->mdl_comentarios = $mdl_comentarios;
    }
    public function setFechaMovimiento($fecha_movimiento){
		$this->fecha_movimiento = $fecha_movimiento;
    }
    public function setMotivoMovimiento($motivo_movimiento){
		$this->motivo_movimiento = $motivo_movimiento;
    }
    public function setUsuarioMovimiento($usuario_movimiento){
		$this->usuario_movimiento = $usuario_movimiento;
    }
    public function setDirectivoId($directivo_id){
      $this->directivo_id= $directivo_id;
    }
    public function setLiderId($lider_id){
        $this->lider_id= $lider_id;
      }
    public function setCoordinadorId($coordinador_id){
        $this->coordinador_id= $coordinador_id;
      }
    
}