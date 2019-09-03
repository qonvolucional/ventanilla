<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verificador extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Verificador_model");
	}

	public function index()
	{
		$data = array('verificadores'=>$this->Verificador_model->getVerificaciones());
		$this->load->view("layouts/dashboard/header");
		$this->load->view("layouts/dashboard/sidebar");
		$this->load->view("dashboard/verificador/lista", $data);
		$this->load->view("layouts/dashboard/footer");
	}

	public function agregar()
	{
		$data = array(
			'cargos'=>$this->Verificador_model->getCargos(),
			'areas'=>$this->Verificador_model->getAreas(),
			'entidades'=>$this->Verificador_model->getEntidades(),
			'cargos'=>$this->Verificador_model->getCargos(),
			'verificadores' => $this->Verificador_model->getVerificadores(),
		);
		$this->load->view("layouts/dashboard/header");
		$this->load->view("layouts/dashboard/sidebar");
		$this->load->view("dashboard/verificador/agrega", $data);
		$this->load->view("layouts/dashboard/footer");
	}

	public function almacenar()
	{

	}

	public function eliminar()
	{

	}


}