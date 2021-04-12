<?php
class Botones{

    private $botonEditarSimpatizante;
    private $botonEditarSimpatizanteIne;
    private $botonEliminarSimpatizanteIne;
    
    function __construct(){       

        $this->botonEditarSimpatizante = '<button class="btn btn-success btn-sm" style="background-color: #7badd3; border-color: #7badd3;" onclick="mostrarModalEditarSimpatizante(simp_id)" title="Editar Simpatizante." data-toggle="modal" data-target="#modal_editar_simpatizante"><i class="fa fa-pencil" aria-hidden="true"></i></button> ';
        $this->botonEditarSimpatizanteIne = '<button class="btn btn-success btn-sm" style="background-color: #7badd3; border-color: #7badd3;" onclick="mostrarModalEditarSimpatizanteIne(simpine_id)" title="Editar Simpatizante." data-toggle="modal" data-target="#modal_editar_simpatizante"><i class="fa fa-pencil" aria-hidden="true"></i></button> ';
        $this->botonEliminarSimpatizanteIne = '<button class="btn btn-danger btn-sm" style="background-color: #; border-color: #;" onclick="eliminarSimpatizanteIne(simpine_id)" title="Eliminar Simpatizante."><i class="fa fa-times" aria-hidden="true"></i></button>';
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
  
}