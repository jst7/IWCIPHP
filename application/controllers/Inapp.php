<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//http://localhost/Taller/index.php/Home/index
									//controlador/accion
class Inapp extends CI_Controller {

	public function index()
	{
		$data["titulo"] = "Bienvenidos a Spotify";
		$data["tituloH1"] = "Hola, ¿Qué quieres hacer?";
		$this->load->view('inapp/index',$data);
	}

	public function artistasusuario()
	{
		$data["titulo"] = "Bienvenidos a Spotify";
		$data["tituloH1"] = "Musica por Artista";
		$this->load->view('inapp/artistasusuario',$data);
	}

		public function cancionesusuario()
	{
		$data["titulo"] = "Bienvenidos a Spotify";
		$data["tituloH1"] = "Canciones";
		$this->load->view('inapp/cancionesusuario',$data);
	}

		public function listasusuario()
	{
		$data["titulo"] = "Listas de Reproducción";
		$data["tituloH1"] = "Listas de Reproducción";
		$this->load->view('inapp/listasusuario',$data);
	}

}