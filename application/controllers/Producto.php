<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'ControladorBase.php';

class Producto extends ControladorBase {
	
	function __construct(){
		parent::__construct('producto/productos');
	}
	
	public function productos(){
		try{
			$this->grocery_crud->set_table('producto');
			$this->grocery_crud->set_subject('Producto');
			$this->grocery_crud->required_fields('nombre','precio', 'stock');
			$this->grocery_crud->set_relation('id_categoria', 'categoria', '{descripcion}');
			$this->grocery_crud->display_as('id_categoria', 'Categoria');
			
			
			$output = $this->grocery_crud->render();
		
			$this->_example_output($output);
		} catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
}