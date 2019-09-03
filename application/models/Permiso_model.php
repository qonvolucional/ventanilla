<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permiso_model extends CI_Model {
	


	public function getRoles(){
		$resultados = $this->db->get("rol");
		return $resultados->result();
	}

	public function getRol($id){
		$this->db->where('id', $id);
		$resultados = $this->db->get("rol");
		return $resultados->row();
	}


	public function getModulos(){
		$resultados = $this->db->get("modulo");
		return $resultados->result();
	}

	public function getPermisos(){
		$resultados = $this->db->get("modulo_rol");
		return $resultados->result();
	}
	
	public function eliminarPermiso($id){
		$this->db->where('rol_id', $id);
		return $this->db->delete('modulo_rol');
	}

	public function guardarPermiso($data){
		return $this->db->insert_batch('modulo_rol', $data);
	}

	public function verificarModuloRol($data){

		$resultado = $this->db->get_where('modulo_rol', $data);
		return $resultado->num_rows();
	}

}