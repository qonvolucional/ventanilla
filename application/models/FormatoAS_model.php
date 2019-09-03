<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormatoAS_model extends CI_Model {
	
	

	public function getOpcionesLike($like){
		$this->db->select('id, nombre');
		$this->db->from('opciones');
		$this->db->like('codigo', $like);
		$this->db->order_by('id', 'ASC');
		$resultados = $this->db->get();
		return $resultados->result();

	}

	public function eliminarRegistros($tablas, $id){
		$this->db->where('empresa_id', $id);
		return $this->db->delete($tablas);
	}

	public function guardarRegistrosBatch($tabla, $data){
		return $this->db->insert_batch($tabla, $data);
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

	public function getRegistrosBien($empresa_id){
		
		$this->db->where("empresa_id", $empresa_id);
	}


}