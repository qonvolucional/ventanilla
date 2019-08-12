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
}