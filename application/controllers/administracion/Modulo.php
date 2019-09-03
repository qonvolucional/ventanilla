<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modulo extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
	}

	public function index()
	{
		$data = array(
			'modulos' => $this->Usuarios_model->getModulos(),
		);
		$this->load->view("layouts/dashboard/header.php");
		$this->load->view("layouts/dashboard/sidebar.php");
		$this->load->view("dashboard/modulo/lista", $data);
		$this->load->view("layouts/dashboard/footer.php");
	}

	public function agregar(){
		$this->load->view("layouts/dashboard/header.php");
		$this->load->view("layouts/dashboard/sidebar.php");
		$this->load->view("dashboard/modulo/agrega");
		$this->load->view("layouts/dashboard/footer.php");
	}

	public function almacenar(){

		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$controlador = $this->input->post("controlador");
		$icon = $this->input->post("icon");
		$fecha_registro = date("Y-m-d H:i:s");

		$this->form_validation->set_rules("nombre","Nombre","required|is_unique[modulo.nombre]");
		$this->form_validation->set_rules("controlador", "Controlador","required");


		if ($this->form_validation->run()==TRUE) {

			$data  = array(
				'nombre' => $nombre, 
				'descripcion'=> $descripcion,
				'controlador'=> $controlador,
				'icon'=> $icon,
				'fecha_registro'=>$fecha_registro,
			);

			if ($this->Usuarios_model->guardarModulo($data)) {
				redirect(base_url()."modulo");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."modulo/agregar");
			}
		}
		else{
			$this->agregar();
		}
	
	}

	public function editar($id){
		$data  = array(
			'modulo' => $this->Usuarios_model->getModulo($id), 
		);
		$this->load->view("layouts/dashboard/header.php");
		$this->load->view("layouts/dashboard/sidebar.php");
		$this->load->view("dashboard/modulo/edita", $data);
		$this->load->view("layouts/dashboard/footer.php");
	}

	public function actualizar(){
		$id = $this->input->post("modulo_id");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$controlador = $this->input->post("controlador");
		$icon = $this->input->post("icon");
		$moduloactual = $this->Usuarios_model->getModulo($id);

		if ($nombre == $moduloactual->nombre) {
			$is_unique = "";
		}else{
			$is_unique = "|is_unique[modulo.nombre]";
		}

		$this->form_validation->set_rules("nombre","Nombre","required".$is_unique);
		$this->form_validation->set_rules("controlador", "Controlador","required");

		if($this->form_validation->run()==TRUE) {
			$data = array(
				'nombre' => $nombre,
				'descripcion'=> $descripcion,
				'controlador'=> $controlador,
				'icon'=> $icon,
			);

			if ($this->Usuarios_model->actualizarModulo($id,$data)) {
				redirect(base_url()."modulo");
			}
			else{
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."modulo/editar/".$id);
			}
		}else{
			$this->editar($id);
		}
	
	}

	public function eliminar($id){
		$data = array('id' => $id);
		$this->Usuarios_model->eliminarModulo($data);
		redirect(base_url()."modulo");
	}


	
}