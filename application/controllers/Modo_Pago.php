<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'ControladorBase.php';

class Modo_Pago extends ControladorBase{
	
    public function modos_de_pago(){
    	$this->grocery_crud->set_table('modo_pago');
    	$output = $this->grocery_crud->render();
    	 
    	$this->_example_output($output);
    }
    
	
}