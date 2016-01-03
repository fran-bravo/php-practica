<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'ControladorBase.php';

class Producto extends ControladorBase {
	
	function __construct(){
		parent::__construct('producto/productos');
	}
	
	public function productos(){
		$this->grocery_crud->set_table('producto');
		$this->grocery_crud->set_subject('Producto');
		$this->grocery_crud->required_fields('nombre','precio', 'stock');
		$this->grocery_crud->set_relation('id_categoria', 'categoria', '{descripcion}');
		
		$output = $this->grocery_crud->render();
	
		$this->_example_output($output);
	}
	
}