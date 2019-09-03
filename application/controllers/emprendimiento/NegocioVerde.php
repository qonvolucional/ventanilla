<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NegocioVerde extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("NegocioVerde_model");
	}

	public function index(){
		if($this->session->has_userdata('empresa_id')){
			$this->session->unset_userdata('empresa_id');
		}
		$data = array('empresas' => $this->NegocioVerde_model->getRegistros(),
			);
		$this->load->view("layouts/dashboard/header");
		$this->load->view("layouts/dashboard/sidebar");
		$this->load->view("dashboard/negocioVerde/lista", $data);
		$this->load->view("layouts/dashboard/footer");
	}

	public function agregar(){
		$data = array(
			'tipo_persona' => $this->NegocioVerde_model->getOpciones('tipo_persona'),
			'tipo_identificacion' => $this->NegocioVerde_model->getOpciones('tipo_identificacion'),
			'region' => $this->NegocioVerde_model->getRegistrosCondicionados('region', array('pais_id'=>1)),
			'unidad_medida' => $this->NegocioVerde_model->getOpciones('unidad_medida'),
			'afirmacion' => $this->NegocioVerde_model->getOpciones('si_no'),
			'cumple' => $this->NegocioVerde_model->getOpciones('cumple_nocumple'),
			'categoria' => $this->NegocioVerde_model->getOpciones('categoria'),
			'aplica' => $this->NegocioVerde_model->getOpciones('aplica_noaplica'),
			'desc_demografia' => $this->NegocioVerde_model->getOpciones('desc_demografia'),
			'etapa' => $this->NegocioVerde_model->getOpciones('etapa'),
			'etapa_empresa' => $this->NegocioVerde_model->getOpciones('etapa_empresa'),
			'desc_demografia' => $this->NegocioVerde_model->getOpciones('desc_demografia'),
			'organizacion' => $this->NegocioVerde_model->getOpciones('orientacion'),
			'tamanio_empresa' => $this->NegocioVerde_model->getOpciones('tamanio_empresa'),
		);

		$jquery = array('jquery' => 'formatoInscripcion.js');
		$this->load->view("layouts/dashboard/header");
		$this->load->view("layouts/dashboard/sidebar");
		$this->load->view("dashboard/negocioVerde/agrega", $data);
		$this->load->view("layouts/dashboard/footer", $jquery);
	}

	public function cargarCombo()
	{
		$tabla = $this->input->post('tabla');
		$where = $this->input->post('where');
		$datos = $this->NegocioVerde_model->getRegistrosCondicionados($tabla, $where);
		echo "<option value='' selected>Selecciona una opción</option>";
		foreach ($datos as $value) {
			//var_dump($value);
			echo "<option value='".$value->id."'>".$value->nombre."</option>";
		}
	}

	public function almacenarInformacionGeneral(){
		
		$this->form_validation->set_rules("tipo_persona_id","Tipo persona","required");
		$this->form_validation->set_rules("tipo_identificacion_id","Tipo persona","required");
		$this->form_validation->set_rules("razon_social","Razón social","required|min_length[3]|max_length[50]|is_unique[empresa.razon_social]");
		$this->form_validation->set_rules("identificacion", "Identificación", "required|min_length[7]|max_length[15]|is_unique[empresa.identificacion]");
		$this->form_validation->set_rules("nombre1", "Representante legal", "required|min_length[3]");
		$this->form_validation->set_rules("identificacion.persona", "Documento", "required|min_length[7]|max_length[15]|is_unique[persona.identificacion]");
		$this->form_validation->set_rules("autoridad_ambiental_id", "Autoridad ambiental", "required");
		$this->form_validation->set_rules("municipio_id", "Autoridad ambiental", "required");
		$this->form_validation->set_rules("pot_estado", "Cumple POT municipal", "required");
		$this->form_validation->set_rules("correo", "Correo Electrónico", "trim|required|valid_email");
		$mensaje = array('error' => '1');
		if(TRUE){
			$persona = json_decode($this->input->post("persona"), true);
			$empresa = json_decode($this->input->post("empresa"), true);
			$asociacion = json_decode($this->input->post("asociacion"), true);
			//var_dump($empresa);
			$img = array(
						'nombre'=> $empresa['razon_social'],
					);
			$mensaje = array(
							'error' => 'No se logró registrar correctamente la información general del negocio verde'
						);
			if($this->NegocioVerde_model->guardarPersona($persona)){
				//Obteniendo el ID del ultimo registro agregado a la base de datos
				$representante_legal_id = $this->NegocioVerde_model->lastID();
				//Campos adicionales de la tabla empresa
				$empresa['representante_legal_id'] = $representante_legal_id;	
				//$empresa = array_merge($empresa, $representante_legal);
				if($this->NegocioVerde_model->guardarEmpresa($empresa)){
					//Obteniendo el ID del ultimo registro agregado a la base de datos
					//$empresa_id = $this->NegocioVerde_model->lastID();
					$this->session->set_userdata('empresa_id', $this->NegocioVerde_model->lastID());
					$this->session->set_userdata('estado_emp', 1);
					$asociacion['empresa_id'] = $this->session->userdata('empresa_id');
					if($this->NegocioVerde_model->guardarAsociacion($asociacion)){
						
						$mensaje['empresa_id'] = $this->session->userdata('empresa_id');
						//Subiendo el imagen
						$config['upload_path']          = './assets/archivo/';
						//echo base_url().'assets/';
				        $config['allowed_types']        = 'gif|jpg|png';
				        //Configurando el nuevo del archivo
				        $config['file_name']			= 'empresa_id_'.$this->session->userdata('empresa_id');
				        $config['max_size']             = 3000;
				        $config['max_width']            = 3000;
				        $config['max_height']           = 3000;
				        $this->load->library('upload', $config);
				        if ( !$this->upload->do_upload('archivo'))
				        {
				                $error = array('error' => $this->upload->display_errors());
				                $mensaje['fase'] = 'Error la imagen no se pudo cargar';
				                //var_dump($error);
				                //$this->load->view('upload_form', $error);
				        }
				        else
				        {
				                $data = array('upload_data' => $this->upload->data());
				                //var_dump($data);
				                //Directorio donde se almacena la imagen
				                $img['url'] = "/assets/archivo/".$data['upload_data']['file_name'];
				                //Guardar el registro de la nueva imagen
				                if($this->NegocioVerde_model->guardarImagen($img)){
					        		$archivo_id = $this->NegocioVerde_model->lastID();
					        		//actualizar campo archivo_id en Empresa
					        		$this->NegocioVerde_model->actualizarEmpresa($this->session->userdata('empresa_id'), array('archivo_id'=>$archivo_id));
					        		$mensaje['error'] = 1;
					        	}else{
					        		$mensaje['fase'] = 'Error al intentar guardar la imagen. Lo demás se almaceno correctamente';
					        	}      
				        }
					}else{
						$this->NegocioVerde_model->eliminar('persona', $representante_legal_id);
						$this->NegocioVerde_model->eliminar('empresa', $this->session->userdata('empresa_id'));
						$mensaje['fase']='Error al intentar guardar la asociación';
					}
				}else{
					$this->NegocioVerde_model->eliminar('persona', $representante_legal_id);
					$mensaje['fase'] = 'Error al intentar registrar los datos de la empresa';
				}
			}else{
				$mensaje['fase'] = 'No se logró registrar correctamente la información general del negocio verde';
			}
		}else{
			$mensaje['error'] = '-1';
		}
		echo json_encode($mensaje);	
	}

	public function descripcionNegocio(){
		$descripcion = $this->input->post("descripcion");
		$descripcion['empresa_id'] = $this->session->userdata('empresa_id');
		if($this->NegocioVerde_model->guardarDescripcion($descripcion)){
			$mensaje = array('error' => 1);
		}else{
			$mensaje = array('error' => 'No se pudo guardar correctamente la información');
		}
		echo json_encode($mensaje);
	}

	public function categoriaNegocio(){
		$empresa_id = $this->session->userdata('empresa_id');
		$categoria = $this->input->post("categoria");
		if($this->NegocioVerde_model->actualizarEmpresa($empresa_id, $categoria)){
			$mensaje = array('error' => 1);
		}else{
			$mensaje = array('error' => 'No se pudo guardar correctamente la información');
		}
		echo json_encode($mensaje);
	}

	public function informacionEmpresa(){
		$empresa_id = $this->session->userdata('empresa_id');
		$empresa_empleado_sexo = $this->input->post('empresa_empleado_sexo');
		$caracterizacion_vinculacion_empresa = $this->input->post('caracterizacion_vinculacion_empresa');
		$empresa_empleado_edad = $this->input->post('empresa_empleado_edad');
		$caracterizacion_empleado_educativo = $this->input->post('caracterizacion_empleado_educativo');
		$caracterizacion_demografia_empresa = $this->input->post('caracterizacion_demografia_empresa');
		$empresa_actividad = $this->input->post('empresa_actividad');
		$caracterizacion_empresa_bien_servicio = $this->input->post('caracterizacion_empresa_bien_servicio');
		$caracterizacion_organizacion_empresa = $this->input->post('caracterizacion_organizacion_empresa');
		//$caracterizacion_organizacion_empresa['empresa_id'] = $empresa_id;
		$this->NegocioVerde_model->guardarRegistrosBatch('empresa_empleado_sexo', $empresa_empleado_sexo);
		$this->NegocioVerde_model->guardarRegistrosBatch('caracterizacion_vinculacion_empresa', $caracterizacion_vinculacion_empresa);
		$this->NegocioVerde_model->guardarRegistrosBatch('empresa_empleado_edad', $empresa_empleado_edad);
		$this->NegocioVerde_model->guardarRegistrosBatch('caracterizacion_empleado_educativo', $caracterizacion_empleado_educativo);
		$this->NegocioVerde_model->guardarRegistrosBatch('caracterizacion_demografia_empresa', $caracterizacion_demografia_empresa);
		$this->NegocioVerde_model->guardarRegistrosBatch('actividad_empresa', $empresa_actividad);
		$this->NegocioVerde_model->guardarRegistrosBatch('caracterizacion_empresa_bien_servicio', $caracterizacion_empresa_bien_servicio);
		$this->NegocioVerde_model->guardarRegistro('caracterizacion_organizacion_empresa', $caracterizacion_organizacion_empresa);

	}

	public function informacionVerificacion(){
		$empresa_id = $this->session->userdata('empresa_id');
		$empresario = $this->input->post('empresario');
		$mensaje = array();
		if($this->NegocioVerde_model->guardarEmpresario($empresario)){
			$empresario_id = $this->NegocioVerde_model->lastID();
			if($this->NegocioVerde_model->actualizarEmpresa($empresa_id, array('empresario_id'=>$empresario_id))){
				$mensaje['error'] = 1;
			}else{
				$mensaje['error'] = 'No se pudo actualizar el empresario en la tabla empresa';
			}
		}else{
			$mensaje['error'] = 'No se pudo guardar correctamente la información';	
		}
		echo json_encode($mensaje);

	}

	public function observacionGeneral(){
		$empresa_id = $this->session->userdata('empresa_id');
		$observacion = $this->input->post('observacion');
		if($this->NegocioVerde_model->actualizarEmpresa($empresa_id, $observacion)){
			$mensaje['error'] = 1;
		}else{
			$mensaje['error'] = 'No se pudo guardar correctamente la información';
		}
		echo json_encode($mensaje);
	}

}