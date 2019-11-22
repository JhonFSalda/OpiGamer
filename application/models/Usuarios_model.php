<?php
/*MODELO de la tabla usuarios*/

class Usuarios_model extends CI_model {

	function __construct() {
		$this->load->helper('security');
	}

	function listar() {
		$query=$this->db->get("usuarios");
		return $query->result_array();
	}

	function validar_acceso() {
		$correo=$this->input->post('correo');
		$clave=$this->input->post('clave');

		$correo=$this->security->xss_clean($correo);
		$clave=$this->security->xss_clean($clave);

		$vector=array("correo"=>$correo,"clave"=>md5($clave));
		$query=$this->db->get_where("usuarios",$vector);

		return $query->result_array();
	}

	function eliminar($param) {
		$this->db->where("pkid",$param);
		return $this->db->delete("usuarios");
	}

	function ingresar() {
		$correo=$this->input->post('correo');
		$clave=$this->input->post('clave');

		$correo=$this->security->xss_clean($correo);
		$clave=$this->security->xss_clean($clave);
		
		$query=$this->db->get_where("usuarios",array("correo"=>$correo));
		$resultado=$query->result_array();
		if (count($resultado)>0) {
			$resp="Este registro ya se encuentra. Revise los datos";
		} else {
			$vector=Array(
				"correo"=>$correo,
				"clave"=>md5($clave)
			);
			$this->db->insert("usuarios",$vector);
			$resp="Registro insertado con exito";
		}
		return $resp;
	}

	function detalle($param) {
		$query=$this->db->get_where("usuarios",array("pkid"=>$param));
		return $query->result_array();
	}

	function modificar($param) {
		$correo=$this->input->post('correo');
		//
		$correo=$this->security->xss_clean($correo);
		
			$vector=Array(
				"correo"=>$correo
			);
			$this->db->where("pkid",$param);
			if ($this->db->update("usuarios",$vector)) {
				$mensaje="Modificacion realizada";
			} else {
				$mensaje="No se puede realizar el proceso. Intente de nuevo";
			}
		return $mensaje;	
	}

}