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

class Rekam_medis extends REST_Controller {

    //put your code here

    public function data_get() {
        
    }

    public function __construct() {
        parent::__construct();
        $this->load->model('rekam_medis_model');
    }

    public function getrekam_medis_post() {
        $pos_array = $this->input->post('data');
        echo $pos_array;
        die;
    }

    public function getrumahsakit_get($no_rm_local = '') {
        $pasien = $this->rekam_medis_model->getdataRs($no_rm_local);
        if (empty($pasien)) {
            $data['status'] = 0;
        } else {
            $data['data'] = $pasien;
            $data['status'] = 1;
        }
        $this->response($data);
    }

    public function getpostrekamedik_post() {
        $mrs_id = $this->input->post('mrs_id');
        $tkunj_no_rm = $this->input->post('tkunj_no_rm');
        $dataResult = array();
        if ($mrs_id) {
            $i = 0;
            while ($i < count($mrs_id)) {
                $kodeRs = $mrs_id[$i];
                $noRmLocal = trim($tkunj_no_rm[$i]);
                if (!empty($noRmLocal)) {
                    $url = 'http://localhost/semar_client/index.php/api/rekammedis_client/get_rekammedis/' . $noRmLocal;

                    $curl_handle = curl_init();
                    curl_setopt($curl_handle, CURLOPT_URL, $url);
                    curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, 'GET');
                    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);

                    $buffer = curl_exec($curl_handle);
                    curl_close($curl_handle);

                    $result = json_decode($buffer);

                    if (!empty($result->data)) {
                        $row = $result->data;
                        $dataResult = $row;
                    }
                }
                $i++;
            }
        }
        $data['data'] = $dataResult;
        $data['status'] = 1;
        $this->response($data);
    }

}