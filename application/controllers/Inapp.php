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
		$this->load->model("listas_dm", '', TRUE);
		$this->load->library('pagination');
    }

    public function comprobarSesion(){
    	if(!$this->session->has_userdata('usuariopublico')){
    		redirect('/home/index');
    	}
    }

    public function paginacion($porPagina, $seccion){
    	 $config['base_url'] = base_url().'index.php/inapp/'.$seccion;
        // numero de objetos de la tabla
    	 if($seccion == 'buscar' ){
    	 	$config['total_rows'] = $this->Buscador_dm->numbusqueda($this->session->userdata('terminoBusca'));
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

		if(!$this->session->has_userdata('escuchando')){
			$this->session->set_userdata('escuchando','1');
		}

		$data = array(	'cancion' => $this->Canciones_dm->especifica($this->session->userdata('escuchando')),
            			'paginacion' => $this->pagination->create_links(),
            			'titulo'=>  "Inicio",
            			'tituloH1' => "Musica por Artista");
		$this->load->view('inapp/index',$data);
	}

	public function buscar(){

		$this->comprobarSesion();
		$porPagina = 3;
		$seccion = 'buscar';
		

		$search = new Buscador_dm();

		if(isset($_POST["termino"])){
			$search->termino=$_POST["termino"];
			$this->session->set_userdata('buscando',$_POST["termino"]);
			$this->session->set_userdata('terminoBusca',$_POST["termino"]);
		}else{
			$search->termino = $this->session->userdata('buscando');
		}
		$this->paginacion($porPagina, $seccion);

		$entra = $this->Buscador_dm->BuscarCancion($search, $porPagina);

		$data = array(	'cancion' => $this->Canciones_dm->especifica($this->session->userdata('escuchando')),
						'canciones' => $entra,
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

		$data = array(	'cancion' => $this->Canciones_dm->especifica($this->session->userdata('escuchando')),
						'artistas' => $this->Artistas_dm->get_all($porPagina),
            			'paginacion' => $this->pagination->create_links(),
            			'titulo'=>  "Artistas",
            			'tituloH1' => "Musica por Artista");

		$this->load->view('inapp/artistasusuario',$data);
	}

	public function artista($id)
	{
		$this->comprobarSesion();


		$data = array(	'cancion' => $this->Canciones_dm->especifica($this->session->userdata('escuchando')),
						'artista' => $this->Artistas_dm->get_artista($id),
						'canciones'=> $this->Artistas_dm->get_canciones($id),
            			'titulo'=>  "Artistas",
            			'tituloH1' => "Musica por Artista");

		$this->load->view('inapp/artista',$data);
	}

	public function cancionesusuario()
	{
		$this->comprobarSesion();
		$porPagina = 3;
		$seccion = 'cancionesusuario';
		$this->paginacion($porPagina, $seccion);

		$data = array(	'cancion' => $this->Canciones_dm->especifica($this->session->userdata('escuchando')),
						'canciones' => $this->Canciones_dm->get_all($porPagina),
			            'paginacion' => $this->pagination->create_links(),
			            'titulo'=>  "Canciones",
			            'tituloH1' => "Todas las Canciones");

		$this->load->view('inapp/cancionesusuario',$data);
	}

	public function cambiarcancion($song){
				$this->session->set_userdata('escuchando',$song);
				redirect('/inapp/cancionesusuario');
	}

	public function cambiarcancionbusqueda($song){
				$this->session->set_userdata('escuchando',$song);
				redirect('/inapp/buscar');
	}

	public function cambiarcancionartista($artista,$song){
				$this->session->set_userdata('escuchando',$song);
				redirect('/inapp/artista/'.$artista);
	}

	public function listasusuario()
	{
		$this->comprobarSesion();
	
		$data = array(	'cancion' => $this->Canciones_dm->especifica($this->session->userdata('escuchando')),
						'usuario' => $this->session->userdata('usuario'),
						'listas' => $this->listas_dm->todas($this->session->userdata('usuario')),
			            'titulo'=>  "Listas de Reproduccion",
			            'tituloH1' => "Listas de Reproduccion");
		$this->load->view('inapp/listasusuario',$data);
	}

	public function lista($lista){
		$this->comprobarSesion();
	
		$data = array(	'cancion' => $this->Canciones_dm->especifica($this->session->userdata('escuchando')),
						'usuario' => $this->session->userdata('usuario'),
						'canciones' => $this->listas_dm->canciones($lista),
			            'titulo'=>  "Listas de Reproduccion",
			            'tituloH1' => "Listas de Reproduccion");
		$this->load->view('inapp/lista',$data);
	}

}