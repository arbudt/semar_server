<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('home/home_model');
    }

    function index() {
        $data['page'] = 'home/view_home';
        $data['menuTitle'] = 'HOME';
        $data['menuDescription'] = 'Aloritma CBC';
//        echo 'sukses';
        $this->load->view('view_template', $data);
    }

}
