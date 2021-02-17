<?php
class Directivo{
    private $mdl_nombre;
    private $mdl_apaterno;
    private $mdl_amaterno;
    private $mdl_localidad;
    private $mdl_seccion;
    private $mdl_direccion;
    private $mdl_cp;
    private $mdl_tel_celular;
    private $mdl_email;
    private $mdl_comentarios;
    private $fecha_movimiento;
    private $motivo_movimiento;
    private $usuario_movimiento;

    function __construct($mdl_nombre,$mdl_apaterno,$mdl_amaterno,$mdl_localidad,$mdl_seccion,$mdl_direccion,$mdl_cp,$mdl_tel_celular,$mdl_email,$mdl_comentarios,$fecha_movimiento,$motivo_movimiento,$usuario_movimiento)
    {
         $this->mdl_nombre=$mdl_nombre;
         $this->mdl_apaterno=$mdl_apaterno;
         $this->mdl_amaterno=$mdl_amaterno;
         $this->mdl_localidad=$mdl_localidad;
         $this->mdl_seccion=$mdl_seccion;
         $this->mdl_direccion=$mdl_direccion;
         $this->mdl_cp=$mdl_cp;
         $this->mdl_tel_celular=$mdl_tel_celular;
         $this->mdl_email=$mdl_email;
         $this->mdl_comentarios=$mdl_comentarios;
         $this->fecha_movimiento=$fecha_movimiento;
         $this->motivo_movimiento=$motivo_movimiento;
         $this->usuario_movimiento=$usuario_movimiento;
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
    public function getEmail(){
		return $this->mdl_email;
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
    public function setEmail($mdl_email){
		$this->mdl_email = $mdl_email;
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
    
}