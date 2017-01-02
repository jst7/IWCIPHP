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
		$data["titulo"] = "Bienvenidos a mi web con CI";
		$data["tituloH1"] = "Bienvenidos";

		$crud = new Grocery_CRUD();

		$crud->set_table("clientes");
		$crud->set_subject("Clientes");

		$output = $crud->render();

		$this->load->view('backoffice/index',$output);
	}

	public function canciones()
	{
		$crud = new Grocery_CRUD();

		$crud->set_table("clientes");
		$crud->set_subject("Clientes");

		$output = $crud->render();

		$this->load->view('backoffice/canciones',$output);
	}

	public function artistas()
	{
		$crud = new Grocery_CRUD();

		$crud->set_table("clientes");
		$crud->set_subject("Clientes");

		$output = $crud->render();

		$this->load->view('backoffice/canciones',$output);
	}
}