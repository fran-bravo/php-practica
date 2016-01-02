<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'ControladorBase.php';

class Producto extends ControladorBase {
	
	public function productos(){
		$this->grocery_crud->set_table('producto');
		$output = $this->grocery_crud->render();
	
		$this->_example_output($output);
	}
	
}