<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
Controlador login
*/

class Login extends CI_Controller {
	function __construct() {
		parent:: __construct();
		$this->load->model("usuarios_model");
	}
	public function index()
	{
		$this->load->view('login');
	}

	function acceso() {
		$data=$this->usuarios_model->validar_acceso();

		if (sizeof($data)>0) {
			$data_session=array(
				'pkid'=>$data[0]["pkid"],
				'nombre'=>$data[0]["nombre"]
			);
			$this->session->set_userdata($data_session);
			redirect('principal');
		} else {
			redirect('login');
		}
	}

}