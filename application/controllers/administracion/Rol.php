<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rol extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
	}

	public function index()
	{
		$data = array(
			'roles' => $this->Usuarios_model->getRoles(),
		);
		$this->load->view("layouts/dashboard/header.php");
		$this->load->view("layouts/dashboard/sidebar.php");
		$this->load->view("dashboard/rol/lista", $data);
		$this->load->view("layouts/dashboard/footer.php");
	}

	public function agregar(){
		$this->load->view("layouts/dashboard/header.php");
		$this->load->view("layouts/dashboard/sidebar.php");
		$this->load->view("dashboard/rol/agrega");
		$this->load->view("layouts/dashboard/footer.php");
	}

	public function almacenar(){

		$nombre = $this->input->post("nombre");

		$this->form_validation->set_rules("nombre","Nombre","required|is_unique[rol.nombre]");

		if ($this->form_validation->run()==TRUE) {

			$data  = array(
				'nombre' => $nombre, 
			);

			if ($this->Usuarios_model->guardarRol($data)) {
				redirect(base_url()."rol");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."rol/agregar");
			}
		}
		else{
			$this->agregar();
		}
	
	}

	public function editar($id){
		$data  = array(
			'rol' => $this->Usuarios_model->getRol($id), 
		);
		$this->load->view("layouts/dashboard/header.php");
		$this->load->view("layouts/dashboard/sidebar.php");
		$this->load->view("dashboard/rol/edita", $data);
		$this->load->view("layouts/dashboard/footer.php");
	}

	public function actualizar(){
		$id = $this->input->post("rol_id");
		$nombre = $this->input->post("nombre");
		$rolactual = $this->Usuarios_model->getRol($id);

		if ($nombre == $rolactual->nombre) {
			$is_unique = "";
		}else{
			$is_unique = "|is_unique[rol.nombre]";

		}

		$this->form_validation->set_rules("nombre","Nombre","required".$is_unique);
		if($this->form_validation->run()==TRUE) {
			$data = array(
				'nombre' => $nombre,
			);

			if ($this->Usuarios_model->actualizarRol($id,$data)) {
				redirect(base_url()."rol");
			}
			else{
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."rol/editar/".$id);
			}
		}else{
			$this->editar($id);
		}
	
	}

	public function eliminar($id){
		$data = array('id' => $id);
		$this->Usuarios_model->eliminarRol($data);
		redirect(base_url()."rol");
	}


	
}