<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of register
 *
 * @author ziaha
 */
class Register extends MY_Controller {
    //put your code here
    
    function __construct() {
        
        parent::__construct();
            
    }

    function index(){
        $this->load->view('register_view');
    }
}