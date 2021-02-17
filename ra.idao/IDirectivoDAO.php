<?php
require_once('../ra.model/Directivo.class.php');
interface IDirectivoDao {    
    function mostrarDirectivo();
    function registrarDirectivo(Directivo $directivo);
}