<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ControladorBase extends CI_Controller {
	
	
	function __construct($url)
	{
		parent::__construct();
	
		$this->url = $url;
		
		$this->load->database();
		$this->load->helper('url');
		/* ------------------ */
	
		$this->load->library('grocery_CRUD');
		
		$this->grocery_crud->set_theme('datatables');
		$this->grocery_crud->set_language('spanish');
	}
	
	function _example_output($output = null){
		$this->load->view('template.php', $output);
	}
	
	function index(){
		redirect($this->url);
	}
}
?>