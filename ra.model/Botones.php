<?php
class Botones{

    private $botonEditarSimpatizante;
    private $botonEditarSimpatizanteIne;
    private $botonEliminarSimpatizanteIne;
    private $botonEliminarSimpatizante;
    private $botonComiteSimpatizante;
    private $botonComiteSimpatizanteVisitado;
    private $botonGeneroMasculinoSimpatizante;
    private $botonGeneroFemeninoSimpatizante;
    private $botonVotar;

    
    function __construct(){       

        $this->botonEditarSimpatizante = '<button class="btn btn-success btn-sm" style="background-color: #7badd3; border-color: #7badd3;" onclick="mostrarModalEditarSimpatizante(simp_id)" title="Editar Simpatizante." data-toggle="modal" data-target="#modal_editar_simpatizante"><i class="fa fa-pencil" aria-hidden="true"></i></button> ';
        $this->botonEditarSimpatizanteIne = '<button class="btn btn-success btn-sm" style="background-color: #7badd3; border-color: #7badd3;" onclick="mostrarModalEditarSimpatizanteIne(simpine_id)" title="Editar Simpatizante." data-toggle="modal" data-target="#modal_editar_simpatizante"><i class="fa fa-pencil" aria-hidden="true"></i></button> ';
        $this->botonEliminarSimpatizanteIne = '<button class="btn btn-danger btn-sm" style="background-color: #; border-color: #;" onclick="eliminarSimpatizanteIne(simpine_id)" title="Eliminar Simpatizante."><i class="fa fa-times" aria-hidden="true"></i></button>';
        $this->botonEliminarSimpatizante = '<button class="btn btn-danger btn-sm" style="background-color: #; border-color: #;" onclick="eliminarSimpatizante(simp_id)" title="Eliminar Simpatizante."><i class="fa fa-times" aria-hidden="true"></i></button>';
        $this->botonComiteSimpatizante = '<button class="btn btn-secondary btn-sm" style="background-color: #; border-color: #;" onclick="btnEstaEnComite(simp_id)" title="Primera visita en comite."><i class="fa fa-users fa-2x" aria-hidden="true"></i></button>';
        $this->botonComiteSimpatizanteVisitado = '<button class="btn btn-success btn-sm" style="background-color: #; border-color: #;"  title="En comite."><i class="fa fa-users fa-2x" aria-hidden="true"></i></button>';
        $this->botonGeneroMasculinoSimpatizante = '<button class="btn btn-link btn-sm" style="background-color: #; border-color: #;" onclick="btnActualizarGeneroMasculino(simp_id)" title="Masculino"><i class="fa fa-male fa-2x" aria-hidden="true"></i></button>';
        $this->botonGeneroFemeninoSimpatizante = '<button class="btn btn-link btn-sm" style="background-color: #; border-color: #;" onclick="btnActualizarGeneroFemenino(simp_id)" title="Femenino"><i class="fa fa-female fa-2x" aria-hidden="true"></i></button>';
        $this->botonVotar = '<button class="btn btn-info btn-sm" style="background-color: #; border-color: #;" onclick="btnYaVoto(simp_id)" title="Votar"><i class="fa fa-check" aria-hidden="true"></i></button>';
    }
    
    function getBotonEditarSimpatizante(){
        return $this->botonEditarSimpatizante;
    }

    function getBotonEditarSimpatizanteIne(){
        return $this->botonEditarSimpatizanteIne;
    }

    function getBotonEliminarSimpatizanteIne(){
        return $this->botonEliminarSimpatizanteIne;
    }

    function getBotonEliminarSimpatizante(){
        return $this->botonEliminarSimpatizante;
    }

    function getBotonComiteSimpatizante(){
        return $this->botonComiteSimpatizante;
    }

    function getBotonGeneroMasculinoSimpatizante(){
        return $this->botonGeneroMasculinoSimpatizante;
    }
    
    function getBotonGeneroFemeninoSimpatizante(){
        return $this->botonGeneroFemeninoSimpatizante;
    }

    function getBotonComiteSimpatizanteVisitado(){
        return $this->botonComiteSimpatizanteVisitado;
    }

    function getBotonYaVoto(){
        return $this->botonVotar;
    }
  
}