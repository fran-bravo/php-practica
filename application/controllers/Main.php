<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends ControladorBase {
 
    public function index()
    {
        $this->_example_output();
    	echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
        die();
    }

}
 

/* End of file main.php */
/* Location: ./application/controllers/main.php */
?>