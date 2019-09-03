<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VerificacionDos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("NegocioVerde_model");
		$this->load->model("VerificacionDos_model");
	}

	public function index($empresa_id){
		$data = array('empresa' => $this->NegocioVerde_model->getEmpresa($empresa_id),
					  'viabilidad_economica' => $this->VerificacionDos_model->getOpciones('VIABILIDAD_ECONOMICA'),
					  'impapcto_ambiental' => $this->VerificacionDos_model->getOpciones('CONTRIBUCION_CONSERVACION'),
					  'enfoque_ciclo' => $this->VerificacionDos_model->getOpciones('CICLO_VIDA'),
					  'vida_util' => $this->VerificacionDos_model->getOpciones('VIDA_UTIL'),
					  'sustancia_material' => $this->VerificacionDos_model->getOpciones('SUSTITUCION_MATERIALES'),
					  'reciclabilidad' => $this->VerificacionDos_model->getOpciones('MATERIALES_RECICLADOS'),
					  'uso_eficiente' => $this->VerificacionDos_model->getOpciones('SOSTENIBLE_RECURSO'),
					  'responsabilidad_interior' => $this->VerificacionDos_model->getOpciones('RESPO_SOCIAL_EMPRESA'),
					  'responsabilidad_cadena' => $this->VerificacionDos_model->getOpciones('RESPO_SOCIAL_VALOR'),
					  'responsabilidad_exterior' => $this->VerificacionDos_model->getOpciones('RESPO_SOCIAL_EXTERIOR'),
					  'comunicacion_atributo' => $this->VerificacionDos_model->getOpciones('COMUNICACION_ATRIBUTOS'),
					  'esquema_programa' => $this->VerificacionDos_model->getOpciones('ESQUEMAS_RECONOCIMIENTOS'),
					  'responsabilidad_social' => $this->VerificacionDos_model->getOpciones('RESPON_SOCIAL_ADICCIONAL'),
			);

		$this->load->view("layouts/dashboard/header");
		$this->load->view("layouts/dashboard/sidebar");
		$this->load->view("dashboard/verificacionDos/agregar", $data);
		$this->load->view("layouts/dashboard/footer");
	}
}