<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//http://localhost/Taller/index.php/Home/index
									//controlador/accion
class Inapp extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model("Canciones_dm", '', TRUE);
		$this->load->model("Artistas_dm", '', TRUE);
    }

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
		$data["artistas"] = $this->Artistas_dm->get_all();
		$this->load->view('inapp/artistasusuario',$data);
	}

		public function cancionesusuario()
	{
	
		$data["titulo"] = "Bienvenidos a Spotify";
		$data["tituloH1"] = "Todas las Canciones";
		$data["canciones"] = $this->Canciones_dm->get_all();
		$this->load->view('inapp/cancionesusuario',$data);
	}

		public function listasusuario()
	{
		$data["titulo"] = "Listas de Reproducción";
		$data["tituloH1"] = "Listas de Reproducción";
		$this->load->view('inapp/listasusuario',$data);
	}

	//reutilizamos la vista
	public function cancionesArtista($id)
	{
		$data["titulo"] = "Canciones Artista";
		$data["tituloH1"] = "Canciones del artista";
		$data["canciones"] = $this->Canciones_dm->get_CancionesArtista($id);
		$this->load->view('inapp/cancionesusuario',$data);
	}

}