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

	public function formatoAS($index = ""){
		$data = array('empresas' => $this->NegocioVerde_model->getRegistros(),
				'tenencia_tierra' => $this->NegocioVerde_model->getOpcionesLike('TT'),
				'certificacion' => $this->NegocioVerde_model->getOpcionesLike('CE'),
				'involucra' => $this->NegocioVerde_model->getOpcionesLike('INVOLUCRA'),
				'actividad_involucra' => $this->NegocioVerde_model->getOpcionesLike('ACTIVIDAD_COMU'),
				'recursos' => $this->NegocioVerde_model->getOpciones('recurso'),
				'practica_conservacion' => $this->NegocioVerde_model->getOpcionesLike('PC'),
				'area_ecosistema' => $this->NegocioVerde_model->getOpcionesLike('AREA_ECO'),
				'plan_manejo' => $this->NegocioVerde_model->getOpcionesLike('PM'),
				'cumple' => $this->NegocioVerde_model->getOpciones('cumple_nocumple'),
				'aplica' => $this->NegocioVerde_model->getOpciones('aplica_noaplica'),
			);
		$this->load->view("layouts/dashboard/header");
		$this->load->view("layouts/dashboard/sidebar");
		$this->load->view("dashboard/negocioVerde/formatoAS/agrega", $data);
		$this->load->view("layouts/dashboard/footer");
	}
}