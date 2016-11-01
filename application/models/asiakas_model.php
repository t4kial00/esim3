<?php
	class asiakas_model extends CI_Model {
		public function getCustomers(){
			$this->db->select('etunimi, sukunimi, email');
			$this->db->from('asiakas');
			return $this->db->get()->result_array();

		}
	}

