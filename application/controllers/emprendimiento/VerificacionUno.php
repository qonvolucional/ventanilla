<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VerificacionUno extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("NegocioVerde_model");
		$this->load->model("VerificacionUno_model");
	}

	public function index($empresa_id){
		$data = array('empresa' => $this->NegocioVerde_model->getEmpresa($empresa_id),
					  'cumplimiento_legal' => $this->VerificacionUno_model->getComuplimientoLegalOpciones(),
					  'condiciones_laborales' => $this->VerificacionUno_model->getCondicionesLaboralesOpciones(),
					  'impacto_ambiental' => $this->VerificacionUno_model->getImpactoAmbientalOpciones(),
					  'impacto_social' => $this->VerificacionUno_model->getImpactoSocialOpciones(),
					  'sustancia_material' => $this->VerificacionUno_model->getSustanciasMaterialesOpciones()
			);

		$this->load->view("layouts/dashboard/header");
		$this->load->view("layouts/dashboard/sidebar");
		$this->load->view("dashboard/verificacionUno/agregar", $data);
		$this->load->view("layouts/dashboard/footer");
	}


	
}