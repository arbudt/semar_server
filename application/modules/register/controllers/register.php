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
            $this->load->model('register_model');
    }

    function index(){
        $this->load->view('register_view');
    }
    
    function auth(){
        $email = $this->input->post('email');
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');
        if($this->register_model->save($nama, $email, $password)){
            redirect('registrasi/reg_pasien');
        }
    }
}
