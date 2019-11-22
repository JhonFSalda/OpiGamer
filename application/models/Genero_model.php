<?php

class Genero_model extends CI_model {

	function __construct() {
		$this->load->helper('security');
	}

	function listar() {
		$query=$this->db->get("genero");
		return $query->num_rows();
	}
}
