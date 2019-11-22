<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model("Juego_model");
		$this->load->model("Opinion_model");
		if (!$this->session->userdata('pkid')) {
			redirect('login');
		}
	}

	public function index()
	{
		$data["correo"]=$this->session->userdata('correo');

		$data["cantjuegos"]=$this->Juego_model->listar();
		$data["cantopiniones"]=$this->Opinion_model->listar();

		$data["titulo"]="Inicio";
		$data["modulo"]="Bienvenido";
		$data["descripcion"]="OpiGamer, para guardar todas tus opiniones.";

		$this->load->view('principal',$data);
	}
}
