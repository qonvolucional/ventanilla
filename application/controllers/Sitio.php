<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitio extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		/*if($this->session->userdata("login")){
			redirect(base_url()."dashboard");
		}*/
	}
	public function index()
	{
		$this->load->view('layouts/sitio/header.php');
		$this->load->view('layouts/sitio/menu.php');
		//$this->load->view('sitio/inicio');
		$this->load->view('layouts/sitio/footer.php');
	}

	public function quienesS()
	{
		$this->load->view('layouts/header.php');
		$this->load->view('layouts/menu.php');
		$this->load->view('sitio/inicio');
		$this->load->view('layouts/footer.php');
	}

	public function servicios()
	{
		$this->load->view('layouts/header.php');
		$this->load->view('layouts/menu.php');
		$this->load->view('sitio/inicio');
		$this->load->view('layouts/footer.php');
	}

	public function negocios()
	{
		$this->load->view('layouts/header.php');
		$this->load->view('layouts/menu.php');
		$this->load->view('sitio/inicio');
		$this->load->view('layouts/footer.php');
	}

	public function documentos()
	{
		$this->load->view('layouts/header.php');
		$this->load->view('layouts/menu.php');
		$this->load->view('sitio/inicio');
		$this->load->view('layouts/footer.php');
	}

	public function fondoI()
	{
		$this->load->view('layouts/header.php');
		$this->load->view('layouts/menu.php');
		$this->load->view('sitio/inicio');
		$this->load->view('layouts/footer.php');
	}

	public function noticias()
	{
		$this->load->view('layouts/header.php');
		$this->load->view('layouts/menu.php');
		$this->load->view('sitio/inicio');
		$this->load->view('layouts/footer.php');
	}

	public function preguntas()
	{
		$this->load->view('layouts/header.php');
		$this->load->view('layouts/menu.php');
		$this->load->view('sitio/inicio');
		$this->load->view('layouts/footer.php');
	}

	public function equipo()
	{
		$this->load->view('layouts/header.php');
		$this->load->view('layouts/menu.php');
		$this->load->view('sitio/inicio');
		$this->load->view('layouts/footer.php');
	}

	public function negociosE()
	{
		$this->load->view('layouts/header.php');
		$this->load->view('layouts/menu.php');
		$this->load->view('sitio/inicio');
		$this->load->view('layouts/footer.php');
	}

	public function registro()
	{
		$this->load->view('layouts/header.php');
		$this->load->view('layouts/menu.php');
		$this->load->view('sitio/inicio');
		$this->load->view('layouts/footer.php');
	}


}
