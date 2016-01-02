<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'ControladorBase.php';

class Categoria extends ControladorBase {
	
	public function categorias(){
		$this->grocery_crud->set_table('categoria');
		$this->grocery_crud->set_subject('Categoria');
		$this->grocery_crud->required_fields('nombre','descripcion');
		
		$output = $this->grocery_crud->render();
		 
		$this->_example_output($output);
	}
	
}