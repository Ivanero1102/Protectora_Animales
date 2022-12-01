<?php
    include_once("Conexion.php");
    include_once("Crud.php");
    include_once("Usuario.php");
    $usuario = new Usuario();
    $usuario->__set("id", 1);
    $usuario->__set("nombre", "Pepe");
    $usuario->__set("apellido", "Garcia");
    $usuario->__set("sexo", "Hombre");
    $usuario->__set("direccion", "calle asecas");
    $usuario->__set("telefono", 616773455);
    echo "</br>";
    print_r($usuario);
    echo "</br>";
    echo "<pre>";
    print_r($usuario->obtieneTodos());
    echo "</pre>";
    echo "<pre>";
    print_r($usuario->obtieneDeID($usuario->__get("id")));
    echo "</pre>";
?>