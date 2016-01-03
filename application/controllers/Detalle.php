<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'ControladorBase.php';

class Detalle extends ControladorBase {
	
	function __construct(){
		parent::__construct('detalle/detalles');
	}
	
    public function detalles(){
    	$this->grocery_crud->set_table('detalle');
    	$this->grocery_crud->set_subject('Detalle');
    	
    	$output = $this->grocery_crud->render();
    	 
    	$this->_example_output($output);
    }
	
}