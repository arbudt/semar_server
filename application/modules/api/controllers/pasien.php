<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pasient
 *
 * @author ziaha
 */
require APPPATH . 'libraries/REST_Controller.php';

class Pasien extends REST_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $this->load->model('pasien_model');
    }

    public function find_get($id = '') {
        $q = $this->pasien_model->get($id);
        if (empty($q)) {
            $data['stasus'] = 0;
            $this->response($data);
        } else {
            $data['pasien'] = $q;
            $data['status'] = 1;
            $this->response($data);
        }
    }

    public function getpasien_get($no_rm_nas = '') {
        $pasien = $this->pasien_model->get($no_rm_nas);
        if (empty($pasien)) {
            $data['status'] = 0;
        } else {
            $data['pasien'] = $pasien;
            $data['status'] = 1;
        }
        $this->response($data);
    }

    function save_pasien_post() {
        $mpas_id = $this->post('mpas_id');
        $mrs_id = $this->input->post('mrs_id');
        $tkunj_no_rm = $this->input->post('t_kunj_no_rm');

        $r = $this->pasien_model->save_pasien($mpas_id, $mrs_id, $tkunj_no_rm);
        if($r == 1){
            $data['status'] = 1;
        }else{
                        $data['status'] = 0;

        }
        return $data;
    }

    //ambil data rumah sakit dan rm medis

    public function get_rm_lain($norm_local_client = '') {
        $rm_nasional = $this->pasien_model->get_rmnasional($norm_local_client);
    }

}
