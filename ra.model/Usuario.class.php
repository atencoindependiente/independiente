<?php
class Usuario{

	private $login;
    private $contrasena;
    private $nombre;
    private $apaterno;
    private $amaterno;
    private $correo;
    private $puesto;
	private $tipo;
	private $visible;
	private $fecha_movimiento;
    private $motivo_movimiento;
    private $fk_estatus;
	private $fk_usuario_movimiento;

	
	function __construct($id, $login, $contrasena, $nombre, $apaterno, $amaterno, $correo, $puesto, $tipo, $visible, $fecha_movimiento, $motivo_movimiento, $fk_estatus, $fk_usuario_movimiento)
	{
		$this->id = $id;
		$this->login = $login;
		$this->contrasena = $contrasena;
		$this->nombre = $nombre;
		$this->apaterno = $apaterno;
		$this->amaterno = $amaterno;
		$this->correo = $correo;
		$this->puesto = $puesto;
		$this->tipo = $tipo;
		$this->visible = $visible;
		$this->fecha_movimiento = $fecha_movimiento;
        $this->motivo_movimiento = $motivo_movimiento;
		$this->fk_estatus = $fk_estatus;
		$this->fk_usuario_movimiento = $fk_usuario_movimiento;
	}

	public function getId(){
		return $this->id;
	}
	public function getLogin(){
		return $this->login;
	}
	public function getContrasena(){
		return $this->contrasena;
    }
    public function getNombre(){
		return $this->nombre;
    }
    public function getApaterno(){
		return $this->apaterno;
    }
    public function getAmaterno(){
		return $this->amaterno;
    }
    public function getCorreo(){
		return $this->correo;
    }
    public function getPuesto(){
		return $this->puesto;
    }
	public function getTipo(){
		return $this->tipo;
	}
	public function getVisible(){
		return $this->visible;
	}
	public function getFechaMovimiento(){
		return $this->fecha_movimiento;
	}
	public function getMotivoMovimiento(){
		return $this->motivo_movimiento;
    }
    public function getFkEstatus(){
		return $this->fk_estatus;
	}
	public function getFkUsuarioMovimiento(){
		return $this->fk_usuario_movimiento;
	}


	public function setId($id){
		$this->id = $id;
	}
	public function setLogin($login){
		$this->login = $login;
	}
	public function setContrasena($contrasena){
		$this->contrasena = $contrasena;
	}
	public function setNombre($nombre){
		$this->nombre = $nombre;
    }
    public function setApaterno($apaterno){
		$this->apaterno = $apaterno;
    }
    public function setAmaterno($amaterno){
		$this->amaterno = $amaterno;
    }
    public function setCorreo($correo){
		$this->correo = $correo;
    }
    public function setPuesto($puesto){
		$this->puesto = $puesto;
    }
    public function setTipo($tipo){
		$this->tipo = $tipo;
	}
	public function setVisible($visible){
		$this->visible = $visible;
	}
	public function setFechaMovimiento($fecha_movimiento){
		$this->fecha_movimiento = $fecha_movimiento;
	}
	public function setMotivoMovimiento($motivo_movimiento){
		$this->motivo_movimiento = $motivo_movimiento;
    }
    public function setFkEstatus($fk_estatus){
		$this->fk_estatus = $fk_estatus;
	}
	public function setFkUsuarioMovimiento($fk_usuario_movimiento){
		$this->fk_usuario_movimiento = $fk_usuario_movimiento;
	}
}

?>