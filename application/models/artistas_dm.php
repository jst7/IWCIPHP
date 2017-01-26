<?php

class Artistas_dm extends CI_Model {
    
    function get_all($ppage) {
        $aux = ($this->uri->segment(3) != '') ? $this->uri->segment(3) . ', ' : '';
        // Preparar sentencia
        $query = "select * from artista order by id limit " . $aux . $ppage;
        $query = $this->db->query($query);
        //var_dump($query->result_array());die();
        return ( $query->num_rows() > 0 ) ? $query->result_array() : array();
    }

    function get_artista($id) {

        // Preparar sentencia
        $query = "select * from artista where id=$id";
        $query = $this->db->query($query);
        //var_dump($query->result_array());die();
        return ( $query->num_rows() > 0 ) ? $query->result_array() : array();
    }

    function get_canciones($id) {

        // Preparar sentencia
        $query = "select * from cancion where artista=$id";
        $query = $this->db->query($query);

        //var_dump($query->result_array());die();
        return ( $query->num_rows() > 0 ) ? $query->result_array() : array();
    }

    public function numCanciones() {
        return $this->db->get('artista')->num_rows();
    }
    
}