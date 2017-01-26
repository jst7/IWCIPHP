<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//http://localhost/Taller/index.php/Home/index
									//controlador/accion
class Inapp extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model("Canciones_dm", '', TRUE);
		$this->load->model("Artistas_dm", '', TRUE);
		$this->load->model("Buscador_dm", '', TRUE);
		$this->load->library('pagination');
    }

    public function comprobarSesion(){
    	if(!$this->session->has_userdata('usuariopublico')){
    		redirect('/home/index');
    	}
    }

    public function paginacion($porPagina, $seccion){
    	 $config['base_url'] = base_url().'index.php/inapp/'.$seccion;
        // numero de ofertas de la tabla
    	 if($seccion == 'buscar' ){
    	 	$config['total_rows'] = $this->Buscador_dm->numCanciones($this->session->userdata('terminoBusca'));
    	 }else if($seccion == 'artistasusuario'){
    	 	$config['total_rows'] = $this->Artistas_dm->numCanciones();
    	 }else if($seccion == 'cancionesusuario'){
        	$config['total_rows'] = $this->Canciones_dm->numCanciones();
    	 }
        // items por pagina
        $config['per_page'] = $porPagina;

        // numero de links que quiero mostrar
        $config['num_links'] = 5;
        $config['first_link'] = 'Primero ';
        $config['last_link'] = ' Ultimo ';
        $config['next_link'] = ' Siguiente ';
        $config['prev_link'] = ' Anterior ';

        $config['cur_tag_open'] = '<a href="javascript:;" class="active">';
        $config['cur_tag_close'] = '</a>';

        $config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);
    }

	public function index()
	{	
		$this->comprobarSesion();
		$data["titulo"] = "Bienvenidos a Spotify";
		$data["tituloH1"] = "Hola, ¿Qué quieres hacer?";
		$this->load->view('inapp/index',$data);
	}

	public function buscar(){

		$this->comprobarSesion();
		$porPagina = 3;
		$seccion = 'buscar';
		$this->paginacion($porPagina, $seccion);

		$search = new Buscador_dm();

		if(isset($_POST["termino"])){
			$search->termino=$_POST["termino"];
			$this->session->set_userdata('buscando',$_POST["termino"]);
			$this->session->set_userdata('terminoBusca',$search->termino);
		}else{
			$search->termino = $this->session->userdata('buscando');
		}

		$entra = $this->Buscador_dm->BuscarCancion($search, $porPagina);

		$data = array('canciones' => $entra,
			'paginacion' => $this->pagination->create_links(),
            'titulo'=>  "Bienvenidos a Spotify",
            'tituloH1' => "Todas las Canciones");

		$this->load->view('inapp/buscador',$data);

	}

	public function artistasusuario()
	{
		$this->comprobarSesion();
		$porPagina = 3;
		$seccion = 'artistasusuario';
		$this->paginacion($porPagina, $seccion);

		$data = array('artistas' => $this->Artistas_dm->get_all($porPagina),
            			'paginacion' => $this->pagination->create_links(),
            			'titulo'=>  "Bienvenidos a Spotify",
            			'tituloH1' => "Musica por Artista");

		$this->load->view('inapp/artistasusuario',$data);
	}

	public function cancionesusuario()
	{
		$this->comprobarSesion();
		$porPagina = 3;
		$seccion = 'cancionesusuario';
		$this->paginacion($porPagina, $seccion);
		$data["titulo"] = "Bienvenidos a Spotify";
		$data["tituloH1"] = "Todas las Canciones";
		//$data["canciones"] = $this->Canciones_dm->get_all();

		$data = array('canciones' => $this->Canciones_dm->get_all($porPagina),
            'paginacion' => $this->pagination->create_links(),
            'titulo'=>  "Bienvenidos a Spotify",
            'tituloH1' => "Todas las Canciones");

		$this->load->view('inapp/cancionesusuario',$data);
	}

	public function listasusuario()
	{
		$this->comprobarSesion();
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