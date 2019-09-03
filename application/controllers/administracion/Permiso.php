<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permiso extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Permiso_model");
	}

	public function index()
	{
		$data = array(
			'roles' => $this->Permiso_model->getRoles(),
			'modulos' => $this->Permiso_model->getModulos(),
			'permisos' => $this->Permiso_model->getPermisos(),
		);

		$jquery = array('jquery' => 'administracion.js');
		$this->load->view("layouts/dashboard/header.php");
		$this->load->view("layouts/dashboard/sidebar.php");
		$this->load->view("dashboard/permiso/agrega", $data);
		$this->load->view("layouts/dashboard/footer.php", $jquery);
	}

	public function almacenar(){

		$rol_id = $this->input->post("rol_id");
		$modulo_rol = $this->input->post("modulo_rol");
		$this->Permiso_model->eliminarPermiso($rol_id);
		if ($this->Permiso_model->guardarPermiso($modulo_rol)) {
			echo "permiso";
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			echo "permiso";
		}

	}

	public function cargarModulo(){
		$rol_id = $this->input->post("rol_id");
		$modulos = $this->Permiso_model->getModulos();
		$html = "<label>Modulos:</label><div class='form-group row col-md-offset-1 col-md-11'>";
		foreach($modulos as $m){
			$aux = array(
				'rol_id'=>$rol_id,
				'modulo_id' => $m->id
			);
			$html .= "<div class='form-check'><label class='checkbox-inline'>";
			$html .="<input class='form-check-input modulo' type='checkbox' name='modulo_id$m->id' id='modulo_id$m->id' value='$m->id'";
			$html.= ($this->Permiso_model->verificarModuloRol($aux) == 1? "checked>$m->nombre</label></div>":">$m->nombre</label></div>");              
		}
		echo $html; 
	}

	
}