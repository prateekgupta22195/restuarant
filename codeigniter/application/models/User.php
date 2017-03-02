<?php 
    class User extends CI_Model {
        function index() {


            $data = array( 
                    'name' => "Gupta", 
                    'password' => "Prateek" 
                ); 

            $this->db->insert("user", $data);
var_dump($data);
return $data;
        }

    }
?>