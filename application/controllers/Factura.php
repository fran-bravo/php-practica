<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'ControladorBase.php';

class Factura extends ControladorBase {
	
	function __construct(){
		parent::__construct('factura/facturas');
	}
	
    public function facturas(){
    	$this->grocery_crud->set_table('factura');
    	$this->grocery_crud->set_subject('Factura');
    	$this->grocery_crud->required_fields('id_cliente', 'id_modo_pago', 'fecha');
    	$this->grocery_crud->set_relation('id_cliente', 'cliente', '{nombre} {apellido}');
    	$this->grocery_crud->set_relation('id_modo_pago', 'modo_pago', '{otros_detalles}');
    	
    	$output = $this->grocery_crud->render();
    	 
    	$this->_example_output($output);
    }
	
}