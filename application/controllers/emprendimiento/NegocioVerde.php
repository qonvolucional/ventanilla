<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NegocioVerde extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("NegocioVerde_model");
	}

	public function index(){
		$data = array('empresas' => $this->NegocioVerde_model->getRegistros(),
			);
		$this->load->view("layouts/dashboard/header");
		$this->load->view("layouts/dashboard/sidebar");
		$this->load->view("dashboard/negocioVerde/lista", $data);
		$this->load->view("layouts/dashboard/footer");
	}

	public function agregar(){

		$this->load->view("layouts/dashboard/header");
		$this->load->view("layouts/dashboard/sidebar");
		$this->load->view("dashboard/negocioVerde/agrega");
		$this->load->view("layouts/dashboard/footer");
	}
}