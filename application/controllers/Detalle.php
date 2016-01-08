<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'ControladorBase.php';

class Detalle extends ControladorBase {
	
	function __construct(){
		parent::__construct('detalle/detalles');
	}
	
    public function detalles(){
	    try{
	    	$this->grocery_crud->set_table('detalle');
	    	$this->grocery_crud->set_subject('Detalle');
	    	$this->grocery_crud->required_fields('id_factura', 'id_producto');
	    	$this->grocery_crud->set_relation('id_producto', 'producto', '{nombre}');    	
			$this->grocery_crud->display_as('id_producto', 'Producto')->display_as('id_factura','Factura #');
			
	    	$output = $this->grocery_crud->render();
	    	 
	    	$this->_example_output($output);
	    } catch(Exception $e){
	    	show_error($e->getMessage().' --- '.$e->getTraceAsString());
	    }
    }

}