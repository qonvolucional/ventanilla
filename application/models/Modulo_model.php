<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modulo_model extends CI_Model {
	
	
	public function getModulos(){
		$resultados = $this->db->get("modulo");
		return $resultados->result();
	}

	public function getModulo($id){
		$this->db->where('id', $id);
		$resultados = $this->db->get("modulo");
		return $resultados->row();
	}

	public function guardarModulo($data){
		return $this->db->insert('modulo', $data);
	}

	public function actualizarModulo($id, $data){
		$this->db->where('id', $id);
		return $this->db->update('modulo', $data);
	}

	public function lastID(){
		return $this->db->insert_id();
	}

	public function eliminarModulo($data){
		return $this->db->delete('modulo', $data);
	}

}