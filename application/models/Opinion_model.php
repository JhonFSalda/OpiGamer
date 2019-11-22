<?php

class Opinion_model extends CI_model {

	function __construct() {
		$this->load->helper('security');
	}

	function listar() {
		$query=$this->db->get("opinion");
		return $query->num_rows();
	}
}
