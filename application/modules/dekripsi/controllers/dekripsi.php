<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dekripsi extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('dekripsi/dekripsi_model');
    }

    function index() {
        $data['page'] = 'dekripsi/view_dekripsi';
        $data['menuTitle'] = 'DEKRIPSI';
        $data['menuDescription'] = 'Halaman dekripsi data';
        $this->load->view('template', $data);
    }

    /*
     * proses dekripsi data
     */

    function proses_dekripsi() {
        $data = array(
            'status' => FALSE,
            'message' => NULL,
            'data' => NULL
        );
        if (!empty($_POST['cipherteks']) && !empty($_POST['kunci'])) {
            $cipherteks = $_POST['cipherteks'];
            $kunci = $_POST['kunci'];

            if (strlen($cipherteks) >= strlen($kunci)) {
                $krip = new CBC();
                $hasil = $krip->dekripsi($cipherteks, $kunci);

                $status = TRUE;
                if ($status == TRUE) {
                    $data['status'] = TRUE;
                    $data['message'] = 'Proses dekripsi berhasil';
                    $data['data'] = $hasil;
                } else {
                    $data['status'] = FALSE;
                    $data['message'] = 'Proses dekripsi gagal';
                }
            } else {
                $data['status'] = FALSE;
                $data['message'] = 'Plaintesk harus lebih panjang dari kunci';
            }
        } else {
            $data['message'] = 'Plainteks dan kunci harus diisi';
        }
        echo json_encode($data);
    }

}