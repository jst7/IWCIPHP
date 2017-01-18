<?php

class Artistas_dm extends CI_Model {
    
    function get_all() {
           // Abrir conexión contra la BD
    $srv="localhost";
    $usu="iw";
    $pwd="123456";
    $bd="iw";
    
    $con = mysqli_connect($srv, $usu, $pwd, $bd);
    
    // Preparar sentencia
    $sql = "select * from artista order by id ";
    
    // Ejecutar sentencia
    // Obtener resultados
    $resul = mysqli_query($con, $sql);
    

    // Cerrar conexion
    mysqli_close($con);
        return $resul;
    }
    
}