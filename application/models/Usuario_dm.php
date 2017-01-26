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

    
    $query = "insert into usuario ". "(Nombre,Apellidos,Login,email,nacimiento,password,admin,Ciudad,Calle,CodPostal,Sexo,Nacionalidad) ". "Values('$usr->nombre', '$usr->apellidos', '$usr->login','$usr->email',str_to_date('$usr->nacimiento','%d/%m/%Y'),'$usr->password',$usr->admin,'$usr->ciudad','$usr->calle',$usr->codPostal,$usr->sexo,'$usr->nacionalidad');";

    $query = $this->db->query($query);

    return $query;
}

public function Login($usr) {
    
    $query = "select email from usuario where email= '$usr->email' and password= '$usr->password'";

    $query = $this->db->query($query)->num_rows();

    $fin=false;
    if($query == 1){
        $fin=true;
    }
    
    return $fin;
}

public function Loginp($usr) {
    
    $query = "select email from usuario where email= '$usr->email' and password= '$usr->password' and admin=1";

    $query = $this->db->query($query)->num_rows();

    $fin=false;
    if($query == 1){
        $fin=true;
    }
    
    return $fin;
}

public function recuperar($email){
    $query = "select * from usuario where email = '$email'";
    $query = $this->db->query($query)->num_rows();

    $fin = false;
    if($query == 1){
        $fin=true;
    }
    
    return $fin;

}

}