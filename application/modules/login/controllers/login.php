<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author ziaha
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Login extends MY_Controller{
    //put your code here
    
    function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        }
    
    
    function index(){
     $this->load->view('login_view');
     
    }
    
    function auth(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $user = $this->login_model->auth($email, $password);
        if(empty($user)){ 
        }else{ 
            redirect('home');
        }
    }

}
