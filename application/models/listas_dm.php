<?php

class listas_dm extends CI_Model {

    public function __CONSTRUCT(){
        
    }

    public function todas($usuario) {

        $query = "select * from usuario where email='$usuario'";
        $query = $this->db->query($query);

        if( $query->num_rows() > 0 ){
            $result = $query->result_array();
            $id = $result[0]['id'];
            $where = " where usuario='$id'";
        }else{
            $where = "";
        }     
        
	    $query = "select * from listareproducción".$where;
	    $query = $this->db->query($query);

    return ( $query->num_rows() > 0 ) ? $query->result_array() : array();
	}

    public function canciones($lista) {

        $query = "select * from listareproducción";
        $query = $this->db->query($query);

    return ( $query->num_rows() > 0 ) ? $query->result_array() : array();
    }
}