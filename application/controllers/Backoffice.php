<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//http://localhost/Taller/index.php/Home/index
									//controlador/accion
class Backoffice extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->database(); //para ahorrar esto se puede hacer en el autoload
		$this->load->library("Grocery_CRUD");
	}

	public function index()
	{
		$crud = new Grocery_CRUD();

		$crud->set_table("usuario");
		$crud->set_subject("Usuario");

		$output = $crud->render();

		$this->load->view('backoffice/index',$output);
	}

	public function canciones()
	{
		$crud = new Grocery_CRUD();

		$crud->set_table("cancion");
		$crud->set_subject("Cancion");

		$output = $crud->render();

		$this->load->view('backoffice/canciones',$output);
	}

	public function artistas()
	{
		$crud = new Grocery_CRUD();

		$crud->set_table("artista");
		$crud->set_subject("Artista");

		$output = $crud->render();

		$this->load->view('backoffice/artistas',$output);
	}

	public function album()
	{
		$crud = new Grocery_CRUD();

		$crud->set_table("album");
		$crud->set_subject("Album");

		$output = $crud->render();

		$this->load->view('backoffice/artistas',$output);
	}
}