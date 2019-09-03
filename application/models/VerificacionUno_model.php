<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');


	/**
	* Hoja de Verificacion uno 
	*/
	class VerificacionUno_model extends CI_Model
	{
		
		/*function __construct(argument)
		{
			# code...
		}*/

		public function getComuplimientoLegalOpciones()
		{
			$this->db->from("opciones");
			$this->db->select("id, nombre");
			$this->db->like('codigo','CUMPLIMIENTO_LEGAL');
			$result = $this->db->get();
			return $result->result();
		}

		public function getCumplimientoLegalEmpresa($empresa_id){

		}

		public function getCondicionesLaboralesOpciones()
		{
			$this->db->from("opciones");
			$this->db->select("id, nombre");
			$this->db->like('codigo','CONDICION_LABORAL');
			$result = $this->db->get();
			return $result->result();
		}

		public function getCondicionesEmpresa($empresa_id){

		}

		public function getImpactoAmbientalOpciones()
		{
			$this->db->from("opciones");
			$this->db->select("id, nombre");
			$this->db->like('codigo','IMPACTO_AMBIENTAL');
			$result = $this->db->get();
			return $result->result();
		}

		public function getImpactoAmbientalEmpresa($empresa_id){

		}

		public function getImpactoSocialOpciones()
		{
			$this->db->from("opciones");
			$this->db->select("id, nombre");
			$this->db->like('codigo','IMPACTO_SOCIAL');
			$result = $this->db->get();
			return $result->result();
		}

		public function getImpactoSocialEmpresa($empresa_id){

		}

		public function getSustanciasMaterialesOpciones()
		{
			$this->db->from("opciones");
			$this->db->select("id, nombre");
			$this->db->like('codigo','MATERIAL_PELIGROSO');
			$result = $this->db->get();
			return $result->result();
		}

		public function getSustanciaMaterialEmpresa($empresa_id)
		{
			
		}

	}

?>