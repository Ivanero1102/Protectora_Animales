<?php
include "conexion.php";
abstract class Crud extends conexion{
    private $tabla;
    private $conexion;

    function __construct($tabla){
        $this->tabla = $tabla;
        $this->conexion = $this->realizaConexion();
    }

    function obtieneTodos(){
        
    }

    function obtieneDeID(){
        
    }

    function borrar(){

    }

    abstract function crear();
    abstract function actualizar();
}
?>