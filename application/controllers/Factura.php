<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'ControladorBase.php';

class Factura extends ControladorBase {
	
    public function facturas(){
    	$this->grocery_crud->set_table('factura');
    	$output = $this->grocery_crud->render();
    	 
    	$this->_example_output($output);
    }
	
}