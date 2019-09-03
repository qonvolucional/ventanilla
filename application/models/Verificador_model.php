<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verificador_model extends CI_Model {
	
	public function getVerificaciones(){
		$this->db->select("verificadorxempresa.id,verificadorxempresa.fecha_asignacion, verificadorxempresa.fecha_retiro, empresa.razon_social as emprendimiento, CONCAT(persona.nombre1, ' ',persona.apellido1) as nombre");
		$this->db->from("verificadorxempresa");
		$this->db->join("persona", "verificadorxempresa.persona_id = persona.id");
		$this->db->join("empresa", "verificadorxempresa.empresa_id = empresa.id");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getCargos(){
		$resultados = $this->db->get('cargo');
		return $resultados->result();
	}

	public function getAreas(){
		$resultados = $this->db->get('area');
		return $resultados->result();
	}

	public function getEntidades(){
		$resultados = $this->db->get('entidad');
		return $resultados->result();
	}

	public function getVerificadores(){
		$this->db->select("CONCAT(persona.nombre1, '', persona.apellido1) as nombre, persona.id");
		$this->db->from("persona");
		$this->db->join("usuarios", "usuarios.persona_id = persona.id");
		$this->db->where("persona.rol_id", "2");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getEmpresas(){
		$this->db->select("empresa.id, empresa.razon_social");
		$this->db->from("verificadorxempresa");
		$this->db->join("empresa", "verificadorxempresa.empresa_id=empresa.id", "right");
		$this->db->where("verificadorxempresa.empresa_id", NULL, FALSE);
		$resultados = $this->db->get();
		return $resultados->result();
	}

}