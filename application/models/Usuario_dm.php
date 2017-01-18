<?php

class Usuario_dm extends CI_Model {

    public function __CONSTRUCT(){
        
    }

    //public para ahorrarnos los get y set y el constructor
    public $nombre;
    public $login;
    public $apellidos;
    public $email;
    public $nacimiento;
    public $password;
    public $admin;
    public $ciudad;
    public $calle;
    public $codPostal;
    public $sexo;
    public $nacionalidad;

    public function Registrar($usr) {
           // Abrir conexión contra la BD
    $srv="localhost";
    $usu="iw";
    $pwd="123456";
    $bd="iw";
    
    $con = mysqli_connect($srv, $usu, $pwd, $bd);
    
    // Preparar sentencia
    /* Salidas de pantalla
    var_dump($usr->nombre);
    var_dump($usr->login);
    var_dump($usr->apellidos);
    var_dump($usr->nacimiento);
    var_dump($usr->password);
    var_dump($usr->admin);
    var_dump($usr->ciudad);
    var_dump($usr->calle);
    var_dump($usr->codPostal);
    var_dump($usr->sexo);
    var_dump($usr->nacionalidad);
    */
    
    $sql = "insert into usuario ". "(Nombre,Apellidos,Login,email,nacimiento,password,admin,Ciudad,Calle,CodPostal,Sexo,Nacionalidad) ". "Values('$usr->nombre', '$usr->apellidos', '$usr->login','$usr->email',str_to_date('$usr->nacimiento','%d/%m/%Y'),'$usr->password',$usr->admin,'$usr->ciudad','$usr->calle',$usr->codPostal,$usr->sexo,'$usr->nacionalidad');";
    
    // Ejecutar sentencia
    // Obtener resultados
    $resul = mysqli_query($con, $sql);

    var_dump($resul);
    // Cerrar conexion
    mysqli_close($con);
        return $resul;
    }
    
}