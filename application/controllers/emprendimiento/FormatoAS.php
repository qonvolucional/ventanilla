<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormatoAS extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("NegocioVerde_model");
		$this->load->model("FormatoAS_model");
	}

	public function editar($empresa_id){
		$this->session->set_userdata('empresa_id', $empresa_id);
		$data = array('empresa' => $this->NegocioVerde_model->getEmpresa($empresa_id),
				'tenencia_tierra' => $this->NegocioVerde_model->getOpcionesLike('TT'),
				'registro' => $this->NegocioVerde_model->getOpcionesLike('RR'),
				'permiso' => $this->NegocioVerde_model->getOpcionesLike('PL'),
				'licencia' => $this->NegocioVerde_model->getOpcionesLike('LL'),
				'certificacion' => $this->NegocioVerde_model->getOpcionesLike('CE'),
				'involucra' => $this->NegocioVerde_model->getOpcionesLike('INVOLUCRA'),
				'actividad_involucra' => $this->NegocioVerde_model->getOpcionesLike('ACTIVIDAD_COMU'),
				'recursos' => $this->NegocioVerde_model->getOpciones('recurso'),
				'practica_conservacion' => $this->NegocioVerde_model->getOpcionesLike('PC'),
				'area_ecosistema' => $this->NegocioVerde_model->getOpcionesLike('AREA_ECO'),
				'plan_manejo' => $this->NegocioVerde_model->getOpcionesLike('PM'),
				'cumple' => $this->NegocioVerde_model->getOpciones('cumple_nocumple'),
				'aplica' => $this->NegocioVerde_model->getOpciones('aplica_noaplica'),
				//'caracterizacion_bien_servicio_empresa' => $this->NegocioVerde_model->
			);

		$jquery = array('jquery' => 'formatoAS.js');
		$this->load->view("layouts/dashboard/header");
		$this->load->view("layouts/dashboard/sidebar");
		$this->load->view("dashboard/formatoAS/editar", $data);
		$this->load->view("layouts/dashboard/footer", $jquery);
	}

	public function almacenarTenenciaTierra(){
		$empresa_id = $this->session->userdata('empresa_id');
		echo $empresa_id;
		$tenencia_tierra = $this->input->post('tenencia_tierra');
		$otra_tenencia_tierra = $this->input->post('otro_tenencia_tierra');
		$tablas = array('otro_tenencia_tierra', 'tenencia_tierra');
		$mensaje = array();
		
		if($this->FormatoAS_model->eliminarRegistros('tenencia_tierra', $empresa_id) && $this->FormatoAS_model->guardarRegistrosBatch('tenencia_tierra', $tenencia_tierra)){

			if($this->FormatoAS_model->eliminarRegistros('otro_tenencia_tierra', $empresa_id) && $this->FormatoAS_model->guardarRegistrosBatch('otro_tenencia_tierra', $otra_tenencia_tierra)){
				$mensaje['error'] = 1;
				$mensaje['fase'] = 'Se guarda con exito la información';
			}else{
				$mensaje['error'] = -1;
				$mensaje['fase'] = 'No se pudo guardar la información no se pudo almacenar información adicional de tenencia de tierra';
			}
		}else{
			$mensaje['error'] = -1;
			$mensaje['fase'] = 'No se pudo guardar la información relacionada con tenencia de tierra';
		}
		
		echo json_encode($mensaje);
	}	
}