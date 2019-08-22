<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata("login")){
			redirect(base_url());
		}
	}

	public function index(){
		$this->load->view("layouts/dashboard/header.php");
		$this->load->view("layouts/dashboard/sidebar.php");
		$this->load->view("dashboard/dashboard");
		$this->load->view("layouts/dashboard/footer.php");
	}

	public function perfil(){
		$this->load->view("layouts/dashboard/header.php");
		$this->load->view("layouts/dashboard/sidebar.php");
		$this->load->view("dashboard/perfil");
		$this->load->view("layouts/dashboard/footer.php");
	}
}

