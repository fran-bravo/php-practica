<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'ControladorBase.php';

class Cliente extends ControladorBase {
	
	public function clientes(){
		$this->grocery_crud->set_table('cliente');
		$this->grocery_crud->set_subject('Cliente');
		$this->grocery_crud->required_fields('nombre','apellido');
		 
		 
		$output = $this->grocery_crud->render();
		 
		$this->_example_output($output);
	}
		
}