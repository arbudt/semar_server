<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of register_rs
 *
 * @author ziaha
 */
class Register_rs extends MY_Controller {

    //put your code here
    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['page'] = 'register_rs/view_register_rs';
        $data['menuTitle'] = 'HOME';
        $data['menuDescription'] = 'Aloritma CBC';
        $this->load->view('view_template', $data);
    }

}
