<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'ControladorBase.php';

class Categoria extends ControladorBase {
	
	public function categorias(){
		$this->grocery_crud->set_table('categoria');
		$output = $this->grocery_crud->render();
		 
		$this->_example_output($output);
	}
	
}