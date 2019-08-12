<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
	}

	public function index()
	{
		if($this->session->userdata("login")){
			redirect(base_url()."dashboard");
		}else{
			$this->load->view('dashboard/login');
		}
	}

	
	public function login(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		$resultado = $this->Usuarios_model->login($username, $password);
		if(!$resultado)
		{
			$this->session->set_flashdata("error","El usuario y/o contraseña son incorrectos");
			$this->index();
		}else{
			$data = array(
				'usuario' => $resultado->id,
				'rol' => $resultado->rol_id,
				'nombre' => $resultado->nombre1,
				'login' => TRUE 
			);

			$this->session->set_userdata($data);
			redirect(base_url()."dashboard");
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}