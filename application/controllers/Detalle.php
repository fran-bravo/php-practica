<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'ControladorBase.php';

class Detalle extends ControladorBase {
	
    public function detalles(){
    	$this->grocery_crud->set_table('detalle');
    	$output = $this->grocery_crud->render();
    	 
    	$this->_example_output($output);
    }
	
}