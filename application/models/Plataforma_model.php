<?php

class Plataforma_model extends CI_model {

	function __construct() {
		$this->load->helper('security');
	}

	function listar() {
		$query=$this->db->get("plataforma");
		return $query->num_rows();
	}
}
