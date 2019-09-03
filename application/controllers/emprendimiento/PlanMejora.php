<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PlanMejora extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("NegocioVerde_model");
		$this->load->model("PlanMejora_model");
	}

	public function index($empresa_id){
		$data = array('empresa' => $this->NegocioVerde_model->getEmpresa($empresa_id),
					  'viabilidad_economica' => $this->PlanMejora_model->getOpciones('VIABILIDAD_ECONOMICA'),
					  'impapcto_ambiental' => $this->PlanMejora_model->getOpciones('CONTRIBUCION_CONSERVACION'),
					  'enfoque_ciclo' => $this->PlanMejora_model->getOpciones('CICLO_VIDA'),
					  'vida_util' => $this->PlanMejora_model->getOpciones('VIDA_UTIL'),
					  'sustancia_material' => $this->PlanMejora_model->getOpciones('SUSTITUCION_MATERIALES'),
					  'reciclabilidad' => $this->PlanMejora_model->getOpciones('MATERIALES_RECICLADOS'),
					  'uso_eficiente' => $this->PlanMejora_model->getOpciones('SOSTENIBLE_RECURSO'),
					  'responsabilidad_interior' => $this->PlanMejora_model->getOpciones('RESPO_SOCIAL_EMPRESA'),
					  'responsabilidad_cadena' => $this->PlanMejora_model->getOpciones('RESPO_SOCIAL_VALOR'),
					  'responsabilidad_exterior' => $this->PlanMejora_model->getOpciones('RESPO_SOCIAL_EXTERIOR'),
					  'comunicacion_atributo' => $this->PlanMejora_model->getOpciones('COMUNICACION_ATRIBUTOS'),
					  'esquema_programa' => $this->PlanMejora_model->getOpciones('ESQUEMAS_RECONOCIMIENTOS'),
					  'responsabilidad_social' => $this->PlanMejora_model->getOpciones('RESPON_SOCIAL_ADICCIONAL'),
			);

		$this->load->view("layouts/dashboard/header");
		$this->load->view("layouts/dashboard/sidebar");
		$this->load->view("dashboard/planMejora/agregar", $data);
		$this->load->view("layouts/dashboard/footer");
	}
}