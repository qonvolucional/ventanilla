<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
	
	public function login($username, $password){
		$this->db->select("persona.id, persona.rol_id, persona.nombre1, persona.identificacion");
		$this->db->from("persona");
		$this->db->join("login", "login.persona_id = persona.id");
		$this->db->where("login.usuario", $username);
		$this->db->where("login.clave", $password);
		$resultado = $this->db->get();

		if($resultado->num_rows() > 0){
			return $resultado->row();
		}else{
			return false;
		}
	}
}