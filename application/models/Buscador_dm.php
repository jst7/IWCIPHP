<?php

class Buscador_dm extends CI_Model {

    public function __CONSTRUCT(){
        
    }

    //public para ahorrarnos los get y set y el constructor
    public $termino;


    public function BuscarCancion($song, $ppage) {
    	$aux = ($this->uri->segment(3) != '') ? $this->uri->segment(3) . ', ' : '';
        // Preparar sentencia

	    $query = 'select * from cancion where nombre like "%'. $song->termino.'%"'. "order by id limit " . $aux . $ppage;
	    $query = $this->db->query($query);

    return ( $query->num_rows() > 0 ) ? $query->result_array() : array();
	}

    public function numCanciones($termino) {

    	$this->db->like('nombre', $termino);
        return $this->db->get('cancion')->num_rows();
    }

}