<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
	
	public function getUsuarios(){
		$this->db->select("usuarios.id, persona.identificacion, CONCAT(persona.nombre1, ' ',persona.apellido1) as nombre, rol.nombre as rol, usuarios.fecha_registro");
		$this->db->from("usuarios");
		$this->db->join("persona", "usuarios.persona_id = persona.id");
		$this->db->join("rol", "usuarios.rol_id = rol.id");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getUsuario($usuario_id){
		$this->db->select("usuarios.id, persona.identificacion, persona.nombre1, persona.nombre2, persona.apellido1, persona.apellido2, persona.correo, archivo.url as imagen, persona.direccion, usuarios.rol_id, persona.celular, persona.fijo");
		$this->db->from("usuarios");
		$this->db->where("usuarios.id", $usuario_id);
		$this->db->join("persona", "usuarios.persona_id = persona.id");
		$this->db->join("archivo", "usuarios.archivo_id = archivo.id");
		$resultados = $this->db->get();
		return $resultados->row();
	}

	public function getRoles(){
		$resultados = $this->db->get("rol");
		return $resultados->result();
	}

	public function getRol($id){
		$this->db->where('id', $id);
		$resultados = $this->db->get("rol");
		return $resultados->row();
	}

	public function guardarRol($data){
		return $this->db->insert('rol', $data);
	}

	public function actualizarRol($id, $data){
		$this->db->where('id', $id);
		return $this->db->update('rol', $data);
	}

	public function eliminarRol($data){
		return $this->db->delete('rol', $data);
	}

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

	public function getModulos(){
		$resultados = $this->db->get("modulo");
		return $resultados->result();
	}

	public function getPermisos(){
		$resultados = $this->db->get("modulo_rol");
		return $resultados->result();
	}
	public function getModulo($id){
		$this->db->where('id', $id);
		$resultados = $this->db->get("modulo");
		return $resultados->row();
	}

	public function eliminarPermiso($id){
		$this->db->where('rol_id', $id);
		return $this->db->delete('modulo_rol');
	}

	public function guardarPermiso($data){
		return $this->db->insert_batch('modulo_rol', $data);
	}

	public function actualizarModulo($id, $data){
		$this->db->where('id', $id);
		return $this->db->update('modulo', $data);
	}

	public function guardarImagen($data){
		return $this->db->insert('archivo', $data);
	}

	public function lastID(){
		return $this->db->insert_id();
	}

	public function agregarPersona($data){
		return $this->db->insert('persona', $data);
	}

	public function guardarUsuario($data){
		return $this->db->insert('usuarios', $data);
	}

}