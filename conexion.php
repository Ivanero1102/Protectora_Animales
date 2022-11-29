<?php
class conexion{
    private $server = "localhost";
    private $user = "root";
    private $clave= "";
    private $BD="protectora_animales";
    
    protected function realizaConexion(){
        try {
        $conn = new PDO("mysql:host=$this->server;dbname=$this->BD", $this->user, $this->clave);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Conexion fallida". $e->getMessage();
        }
        return $conn;
    }
}
?>