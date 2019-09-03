<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');


	/**
	* Hoja de Verificacion uno 
	*/
	class VerificacionDos_model extends CI_Model
	{
		
		/*function __construct(argument)
		{
			# code...
		}*/

		public function getOpciones($filter)
		{
			$this->db->from("opciones");
			$this->db->select("id, nombre");
			$this->db->like('codigo',$filter);
			$result = $this->db->get();
			return $result->result();
		}

		

	}

?>