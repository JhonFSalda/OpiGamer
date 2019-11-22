<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Juego extends CI_Controller {

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
		$data["modulo"]="Juego";
		$data["descripcion"]="Listado de juegos.";

		$this->crud->set_theme('flexigrid');
		$this->crud->set_table('juego');
		$this->crud->set_subject("juego");
		$this->crud->required_fields("nombre","id_genero","id_plataforma");
		$this->crud->fields("nombre","id_genero","id_plataforma");

		$this->crud->set_relation("id_genero","genero","nombre");
		$this->crud->set_relation("id_plataforma","plataforma","nombre");
		
		$this->crud->display_as("nombre","Nombre");
		$this->crud->display_as("id","Número");
		$this->crud->display_as("id_genero","Género");
		$this->crud->display_as("id_plataforma","Plataforma");

		$this->crud->unset_export();
		$this->crud->unset_print();

		$tabla=$this->crud->render();

		$data["contenido"]=$tabla->output;
		$data["js_files"]=$tabla->js_files;
		$data["css_files"]=$tabla->css_files;

		$this->load->view('crud',$data);
	}
}
