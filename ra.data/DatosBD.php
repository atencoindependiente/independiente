<?php

class DatosBD {
    public  $dbserver;
    public $dbuser;
    public $dbpassword;
    public $dbname;

    function __construct() {
        // local
        $this->dbserver = 'beyat6gapkrkn2zewptd-mysql.services.clever-cloud.com:3306';
        $this->dbuser = 'uyueiovehrzqdtto';
        $this->dbpassword = 'KLRCqk3CT1rXBUYdXjmp';
        $this->dbname = 'beyat6gapkrkn2zewptd';

    }

    function connect(){ 
        $connect = new mysqli($this->dbserver, $this->dbuser, $this->dbpassword, $this->dbname);
        if (mysqli_connect_error()) {
            die('Error de Conexión (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
        }
        mysqli_set_charset($connect, 'utf8');
        return $connect;
    }
}
