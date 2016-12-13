<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//http://localhost/Taller/index.php/Home/index
									//controlador/accion
class Home extends CI_Controller {

	public function index()
	{
		$data["titulo"] = "Bienvenidos a mi web con CI";
		$data["tituloH1"] = "Bienvenidos";
		$this->load->view('home/index',$data);
	}

	public function acercade()
	{
		$data["titulo"] = "Bienvenidos a mi web con CI";
		$data["tituloH1"] = "Culpables de este sitio web";
		$this->load->view('home/acercade',$data);
	}
}