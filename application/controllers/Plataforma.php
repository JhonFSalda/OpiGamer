<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plataforma extends CI_Controller {

	function __construct() {
		parent:: __construct(); 
		$this->load->library("grocery_CRUD");
		$this->crud=new grocery_CRUD();

		if (!$this->session->userdata('pkid')) {
			redirect('login');
		}
	}

	public function index()
	{
		$data["modulo"]="Plataforma";
		$data["descripcion"]="Listado de plataformas.";

		$this->crud->set_theme('flexigrid');
		$this->crud->set_table('plataforma');
		$this->crud->set_subject("plataforma");
		$this->crud->required_fields("nombre");
		$this->crud->fields("nombre");
		$this->crud->display_as("nombre","Nombre");

		$tabla=$this->crud->render();

		$data["contenido"]=$tabla->output;
		$data["js_files"]=$tabla->js_files;
		$data["css_files"]=$tabla->css_files;

		$this->load->view('crud',$data);
	}
}
