<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//http://localhost/Taller/index.php/Home/index
									//controlador/accion
class Home extends CI_Controller {

	public function index()
	{
		$data["titulo"] = "Bienvenidos a Spotify";
		$data["tituloH1"] = "Bienvenidos";
		$this->load->view('home/index',$data);
	}

	public function acercade()
	{
		$data["titulo"] = "Sobre nosotros";
		$data["tituloH1"] = "Creadores";
		$this->load->view('home/acercade',$data);
	}

	public function registro()
	{
		$data["titulo"] = "Registro de Spotify";
		$data["tituloH1"] = "Registro";

		$this->load->view('home/registro',$data);
	}

	public function reccontrasena()
	{
		$data["titulo"] = "Recuperar Contraseña";
		$data["tituloH1"] = "Recuperar";

		$this->load->view('home/reccontrasena',$data);
	}

}