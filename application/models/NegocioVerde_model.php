<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NegocioVerde_model extends CI_Model {
	
	public function getRegistros(){
		$this->db->select("empresa.id, empresa.identificacion, empresa.razon_social, empresa.fecha_registro, CONCAT(persona.nombre1, ' ', persona.apellido1) as representante_legal, tamanio_empresa.nombre");
		$this->db->from("empresa");
		$this->db->join("tamanio_empresa", "tamanio_empresa.id = empresa.tamanio_empresa_id");
		$this->db->join("persona", "persona.id = empresa.persona_id");
		$resultado = $this->db->get();
		return $resultado->result();
	
	}

	public function getOpcionesLike($like){
		$this->db->select('id, nombre');
		$this->db->from('opciones');
		$this->db->like('codigo', $like);
		$this->db->order_by('id', 'ASC');
		$resultados = $this->db->get();
		return $resultados->result();

	}

	public function getEmpresasVerificador($usuario){
		$this->db->select('empresa.id,empresa.razon_social,empresa.identificacion');
		$this->db->from('verificadorxempresa');
		$this->db->join('empresa', 'empresa.id = verificadorxempresa.empresa_id');
		$this->db->where("verificadorxempresa.persona_id", $usuario);
		$this->db->where("informacion_as","no");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getOpciones($tabla){
		$this->db->select('id, nombre');
		$this->db->from($tabla);
		$this->db->order_by('id', 'DESC');
		$resultados = $this->db->get();
		return $resultados->result();
	}


}