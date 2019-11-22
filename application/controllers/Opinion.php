<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opinion extends CI_Controller {

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
		$data["modulo"]="Opinión";
		$data["descripcion"]="Listado de opiniones.";

		$this->crud->set_theme('flexigrid');
		$this->crud->set_table('opinion');
		$this->crud->set_subject("opinión");
		$this->crud->required_fields("fkid_juego", "texto");
		$this->crud->fields("fkid_juego","texto");

		$this->crud->display_as("texto","Opinión");
		$this->crud->display_as("fkid_juego","Juego");

		$this->crud->set_relation("fkid_juego","juego","nombre");

		$tabla=$this->crud->render();

		$data["contenido"]=$tabla->output;
		$data["js_files"]=$tabla->js_files;
		$data["css_files"]=$tabla->css_files;

		$this->load->view('crud',$data);
	}
}
