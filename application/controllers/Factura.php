<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'ControladorBase.php';

class Factura extends ControladorBase {
	
	function __construct(){
		parent::__construct('factura/facturas');
	}
	
    public function facturas(){
    	try{
    		$this->grocery_crud->set_table('factura');
    		$this->grocery_crud->set_subject('Factura');
    		$this->grocery_crud->required_fields('id_cliente', 'id_modo_pago', 'fecha');
    		$this->grocery_crud->set_relation('id_cliente', 'cliente', '{nombre} {apellido}');
    		$this->grocery_crud->set_relation('id_modo_pago', 'modo_pago', '{otros_detalles}');
    		$this->grocery_crud->set_relation_n_n('Productos', 'detalle', 'producto', 'id_factura', 'id_producto', 'nombre');
    		$this->grocery_crud->columns('id_factura', 'id_cliente', 'id_modo_pago', 'fecha', 'Productos');
    		$this->grocery_crud->display_as('id_cliente', 'Cliente')->display_as('id_modo_pago', 'Modo de Pago')->display_as('id_factura', 'Factura #');

    		$output = $this->grocery_crud->render();
    		
    		$this->_example_output($output);
    	} catch(Exception $e){
    		show_error($e->getMessage().' --- '.$e->getTraceAsString());
    	}
    	
    }
	

}