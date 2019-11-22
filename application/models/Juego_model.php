<?php

class Juego_model extends CI_model {

	function __construct() {
		$this->load->helper('security');
	}

	function listar() {
		$query=$this->db->get("juego");
		return $query->num_rows();
	}
}
