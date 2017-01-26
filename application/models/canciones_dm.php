<?php

class Canciones_dm extends CI_Model {
    
    function get_all($ppage) {
        $aux = ($this->uri->segment(3) != '') ? $this->uri->segment(3) . ', ' : '';
        // Preparar sentencia
        $query = "select * from cancion order by id limit " . $aux . $ppage;
        $query = $this->db->query($query);
        //var_dump($query->result_array());die();
        return ( $query->num_rows() > 0 ) ? $query->result_array() : array();
    }

    function especifica($valor) {//detalle
        $query = "select * from cancion where id='$valor'";
        $query = $this->db->query($query);
        //var_dump($query->result_array());die();
        return ( $query->num_rows() > 0 ) ? $query->result_array() : array();
    }
    
    public function numCanciones() {
        return $this->db->get('cancion')->num_rows();
    }
    
}