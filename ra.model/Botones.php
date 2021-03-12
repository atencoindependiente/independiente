<?php
class Botones{

    private $botonEditarSimpatizante;
    private $botonEditarSimpatizanteIne;
    
    function __construct(){       

        $this->botonEditarSimpatizante = '<button class="btn btn-success btn-sm" style="background-color: #7badd3; border-color: #7badd3;" onclick="mostrarModalEditarSimpatizante(simp_id)" title="Editar Simpatizante." data-toggle="modal" data-target="#modal_editar_simpatizante"><i class="fa fa-pencil" aria-hidden="true"></i></button> ';
        $this->botonEditarSimpatizanteIne = '<button class="btn btn-success btn-sm" style="background-color: #7badd3; border-color: #7badd3;" onclick="mostrarModalEditarSimpatizanteIne(simpine_id)" title="Editar Simpatizante." data-toggle="modal" data-target="#modal_editar_simpatizante"><i class="fa fa-pencil" aria-hidden="true"></i></button> ';
        
    }
    
    function getBotonEditarSimpatizante(){
        return $this->botonEditarSimpatizante;
    }

    function getBotonEditarSimpatizanteIne(){
        return $this->botonEditarSimpatizanteIne;
    }
  
}