<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
	}

	public function index()
	{
		$data = array(
			'usuarios' => $this->Usuarios_model->getUsuarios(),
		);
		$this->load->view("layouts/dashboard/header.php");
		$this->load->view("layouts/dashboard/sidebar.php");
		$this->load->view("dashboard/usuario/lista", $data);
		$this->load->view("layouts/dashboard/footer.php");
	}

	public function agregar(){
		$data = array(
			'roles' => $this->Usuarios_model->getRoles(),
		);
		$this->load->view("layouts/dashboard/header.php");
		$this->load->view("layouts/dashboard/sidebar.php");
		$this->load->view("dashboard/usuario/agrega", $data);
		$this->load->view("layouts/dashboard/footer.php");
	}

	public function encriptar($clave){
		/**
		 * Observe que la sal se genera aleatoriamente aquí.
		 * No use nunca una sal estática o una que no se genere aleatoriamente.
		 *
		 * Para la GRAN mayoría de los casos de uso, dejar que password_hash genere la sal aleatoriamente
		 */
		$opciones = [
		    'cost' => 11,
		    'salt' => random_bytes(30),
		];
		$resultado = password_hash($clave, PASSWORD_BCRYPT, $opciones);
		return $resultado;
	}

	public function verificar($clave, $hash){
		return password_verify($clave, $hash);
	}

	public function almacenar(){
		$identificacion = $this->input->post("identificacion");
		$rol_id = $this->input->post("rol_id");
		$nombre1 = $this->input->post("nombre1");
		$nombre2 = $this->input->post("nombre2");
		$apellido1 = $this->input->post("apellido1");
		$apellido2 = $this->input->post("apellido2");
		$correo = $this->input->post("correo");
		$celular = $this->input->post("celular");
		$fijo = $this->input->post("fijo");
		$direccion = $this->input->post("direccion");

		$persona = array(
			'identificacion' => $identificacion,
			'nombre1' => $nombre1,
			'nombre2' => $nombre2,
			'apellido1' => $apellido1,
			'apellido2' => $apellido2,
			'correo' => $correo,
			'direccion' => $direccion,
			'rol_id' => $rol_id,
			'area_id' => 1,
		);

		$img = array('nombre'=> $nombre1." ".$apellido1,);


		if($this->Usuarios_model->agregarPersona($persona)){

			$persona_id = $this->Usuarios_model->lastID();
			$archivo_id = "";
			
			//Subiendo el imagen
			$config['upload_path']          = './assets/archivo/';
			//echo base_url().'assets/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        //Configurando el nuevo del archivo
	        $config['file_name']			= 'persona_id_'.$persona_id;
	        $config['max_size']             = 3000;
	        $config['max_width']            = 3000;
	        $config['max_height']           = 3000;
	        $this->load->library('upload', $config);
	        if ( !$this->upload->do_upload('imagen'))
	        {
	                $error = array('error' => $this->upload->display_errors());
	                $this->session->set_flashdata("error","No se cargo correctamente la imagen de perfil");
	        }
	        else
	        {
	                $data = array('upload_data' => $this->upload->data());
	                //var_dump($data);
	                //Directorio donde se almacena la imagen
	                $img['url'] = "/assets/archivo/".$data['upload_data']['file_name'];
	                //Guardar el registro de la nueva imagen
	                if($this->Usuarios_model->guardarImagen($img)){
		        		$archivo_id = $this->Usuarios_model->lastID();
		        	}else{
		        		$this->session->set_flashdata("error","No se pudo guardar la informacion de la imagen");
		        	}      
	        }
	        //Datos del usuario asociado a la persona creada
	        $usuario = array(
				'persona_id' => $persona_id,
				'contrasena' => $this->encriptar($identificacion),
				'rol_id' => $rol_id,
				'estado' => 1,
				'archivo_id' => $archivo_id,
			);
			if($this->Usuarios_model->guardarUsuario($usuario)){
				redirect(base_url()."usuario");
			}else{
				$this->session->set_flashdata("error","No se pudo guardar la información correspondiente al usuario");
				redirect(base_url()."usuario");
			}


		}else{
			$this->session->set_flashdata("error","No se pudo guardar la información");
			redirect(base_url()."usuario/almacenar");
		}
		
	}
	
	public function editar($usuario_id){
		$data = array(
			'usuario'=>$this->Usuarios_model->getUsuario($usuario_id),
			'roles' => $this->Usuarios_model->getRoles(),
		);
		$this->load->view("layouts/dashboard/header.php");
		$this->load->view("layouts/dashboard/sidebar.php");
		$this->load->view("dashboard/usuario/edita", $data);
		$this->load->view("layouts/dashboard/footer.php");
	}
}