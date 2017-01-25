<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//http://localhost/Taller/index.php/Home/index
									//controlador/accion


class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
		//a esto me refiero como se cargan los models, asi se importa todos los modelos
        $this->load->model("Usuario_dm", '', TRUE);
    }

    public function comprobarSesion(){
    	if($this->session->has_userdata('usuariopublico')){
    		redirect('/inapp/index');
    	}else if($this->session->has_userdata('usuarioprivado')){
    		redirect('/backoffice/index');
    	}
    }

	public function index()
	{
		$this->comprobarSesion();
		$data["titulo"] = "Bienvenidos a Spotify";
		$data["tituloH1"] = "Bienvenidos";
		$this->load->view('home/index',$data);
	}

	public function loginprivado()
	{
		$this->comprobarSesion();
		$data["titulo"] = "LoginPrivado";
		$data["tituloH1"] = "Administrador";
		$this->load->view('home/loginprivado',$data);
	}

	public function acercade()
	{
		$this->comprobarSesion();
		$data["titulo"] = "Sobre nosotros";
		$data["tituloH1"] = "Creadores";
		$this->load->view('home/acercade',$data);
	}

	public function registro()
	{
		$this->comprobarSesion();
		$data["titulo"] = "Registro de Spotify";
		$data["tituloH1"] = "Registro";

		$this->load->view('home/registro',$data);
	}

	public function reccontrasena()
	{
		$this->comprobarSesion();
		$data["titulo"] = "Recuperar Contraseña";
		$data["tituloH1"] = "Recuperar";

		$this->load->view('home/reccontrasena',$data);
	}

	public function login(){
		$usr = new Usuario_dm();

		$usr->email=$_POST["email"];
		$usr->password=$_POST["password"];

		$entra = $this->Usuario_dm->Login($usr);

		if($entra){
			$this->session->set_userdata('usuariopublico','sesionado');
		}
		redirect('/inapp/index', 'location');
	}

	public function loginp(){
		$usr = new Usuario_dm();

		$usr->email=$_POST["email"];
		$usr->password=$_POST["password"];

		$entra = $this->Usuario_dm->Loginp($usr);

		if($entra){
			$this->session->set_userdata('usuarioprivado','sesionado');
		}
		redirect('/backoffice/index', 'location');
	}

	public function logout(){
		$this->session->unset_userdata('usuariopublico');
		$this->session->unset_userdata('usuarioprivado');
		redirect('home/index');
	}

    public function registrar()
	{

		//necesaria carga del model en el costructor del controlador , lo marco arriba
		$usr=new Usuario_dm();

		$usr->nombre =$_POST["nombre"];
		$usr->apellidos = $_POST['Apellidos'];
		$usr->login = $_POST['Usuario'];
		$usr->email = $_POST['Email'];
		$usr->nacimiento = $_POST['Fecha'];
		$usr->password = $_POST['password'];
		$usr->admin = 0;
		$usr->ciudad = $_POST['Ciudad'];
		$usr->calle = $_POST['Calle'];
		$usr->codPostal = (int)$_POST['CodPos'];
		
		if($_POST['sexo'] == "mujer"){
			$usr->sexo = 0;
		}else{
			$usr->sexo = 1;
		}

		switch((int)$_POST['Nacionalidad']){
			case "00":
				$usr->nacionalidad = "español";
			break;
			case "01":
				$usr->nacionalidad = "Europea";
			break;
			case "02":
				$usr->nacionalidad = "Extra Comunitaria";
			break;
			case "03":
			$usr->nacionalidad = "Estado Unidense";
			break;
		}
        $this->Usuario_dm->Registrar($usr);

		redirect('/Home/index');
	}

}