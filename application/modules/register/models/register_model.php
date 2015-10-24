<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author ziaha
 */
class Register_model extends MY_Model {
    //put your code here
    
    public function __construct() {
        parent::__construct();
    }
    
    function save($name, $email, $password){
        $data = array(
            'nama' => $name,
            'email' => $email,
            'password' => $password
        );
               $q = $this->db->insert('user', $data);
               if($q)
                   return 1;
               else return 0;
    }
}
