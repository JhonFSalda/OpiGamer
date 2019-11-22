<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genero extends CI_Controller {

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
		$data["modulo"]="Género";
		$data["descripcion"]="Listado de generos.";

		$this->crud->set_theme('flexigrid');
		$this->crud->set_table('genero');
		$this->crud->set_subject("genero");
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
