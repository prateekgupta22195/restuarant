<?php  
    defined('BASEPATH') OR exit('No direct script access allowed');  
      
    class Hello extends CI_Controller {  
          
        public function index() {  
            $this->load->database();
            $this->load->model("user");
            $data = $this->user->index();
            var_dump($data);
            $this->load->view('hello_world', $data); 
            
         }  
    }  
?>  