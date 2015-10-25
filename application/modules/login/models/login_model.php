<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login_model
 *
 * @author ziaha
 */
class Login_model extends MY_Model{
    //put your code here
    function __construct() {
        parent::__construct();
    }
    
    function auth($email, $password){
        $q = $this->db->from('user')->where('email', $email)
                ->where('password', md5($password))->get();
        return $q->num_rows() > 0 ? $q->row() : null;
    }

}
