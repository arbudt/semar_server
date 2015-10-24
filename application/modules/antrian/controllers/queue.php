<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Antrian
 *
 * @author ziaha
 */
class Queue extends MY_Controller {

    private $REST_GET_ANTRIAN = "index.php/api/antrian_client/get_antrian";

    //put your code here
    function __construct() {
        parent::__construct();
        $this->load->model('queue_model');
        $this->load->library('rest');
        Requests::register_autoloader();
    }

    function index() {
        $result = $this->queue_model->get_rumahsakit_list();

        $data['page'] = "queue/view_queue";
        $data['data'] = $result;
        $this->load->view('view_template', $data);
    }

    function get_noantrian_client() {
        $date = date("d-m-Y");
        $rs_id = $this->input->post('rs_id');
        $poli_id = $this->input->post('poli_id');
        $host = $this->queue_model->get_host($rs_id);

        $url = $host->mrs_host . $this->REST_GET_ANTRIAN;
        echo $url;
        $header = array(
            'Accept' => 'application/json'
        );
        $data_antrian = Requests::get($url . '/' . $poli_id . '/' . $date, $header);
        echo $data_antrian;
    }

}
