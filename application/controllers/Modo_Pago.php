<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'ControladorBase.php';

class Modo_Pago extends ControladorBase{
	
	function __construct(){
		parent::__construct('modo_pago/modos_de_pago');
	}
	
    public function modos_de_pago(){
    	try{
	    	$this->grocery_crud->set_table('modo_pago');
	    	$this->grocery_crud->set_subject('Modo de Pago');
	    	
	    	$output = $this->grocery_crud->render();
	    	 
	    	$this->_example_output($output);
	    } catch(Exception $e){
	    	show_error($e->getMessage().' --- '.$e->getTraceAsString());
	    }
    }
    
	
}