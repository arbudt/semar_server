<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class home extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('front/home_model');
    }

    function index() {
        $data['page'] = 'front/view_home';

        $data['content']['title'] = 'Coba';
        $data['content']['title_desc'] = 'Sukses';
        $data['content']['bread_crumb'] = array(
            array(
                'label' => 'Home',
                'link' => '#linkhome'
            ),
            array(
                'label' => 'coba',
                'link' => '#linkcoba'
            )
        );
        $this->load->view('view_template', $data);
    }

    /*
     * proses enkripsi data
     */

    function proses_enkripsi() {
        $data = array(
            'status' => FALSE,
            'message' => NULL,
            'data' => NULL
        );
        $this->load->library('CBC');

        if (!empty($_POST['plainteks']) && !empty($_POST['kunci'])) {
            $plainteks = $_POST['plainteks'];
            $kunci = $_POST['kunci'];

            if (strlen($plainteks) >= strlen($kunci)) {
                $krip = new CBC();
                $hasil = $krip->enkripsi($plainteks, $kunci);

                $status = TRUE;
                if ($status == TRUE) {
                    $data['status'] = TRUE;
                    $data['message'] = 'Proses enkripsi berhasil';
                    $data['data'] = $hasil;
                } else {
                    $data['status'] = FALSE;
                    $data['message'] = 'Proses enkripsi gagal';
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

    function test() {
        $plainteks = 'KRIPTOGRAFI';
        $kunci = 'ILMU';
        $krip = new CBC();
        $hasil = $krip->enkripsi($plainteks, $kunci);
        echo $hasil;
    }

    function test2() {
        $cipherteks = '43460caaf59a64396397a';
        $kunci = 'ILMU';
        $krip = new CBC();
        $hasil = $krip->dekripsi($cipherteks, $kunci);
    }

    public function hitung() {
        $n = 5; /* sampai ke n */

        $hasil = 1; /* nilai awal */

        $stringHitung = '' . $hasil;
        $looping = 0;
        for ($i = 3; $i < $n; $i = $i + 2) {
            //echo $hasil;
            if ($looping % 2 == 0) {
                $stringHitung .= '-(1/' . $i . ')';
                $hasil = $hasil - (1 / $i);
            } else {
                $stringHitung .= '+(1/' . $i . ')';
                $hasil = $hasil + (1 / $i);
            }
            $looping++;
        }
        echo 'hasil sampai ke n = ' . $n . ' adalah<br>' . $stringHitung . ' = ' . $hasil;
    }

    public function hitung2() {
        $n = 5; /* sampai ke n */

        $hasil = 1; /* nilai awal */

        $stringHitung = '' . $hasil;
        $looping = 0;
        $i = 3;
        while ($looping < $n) {
            if ($looping % 2 == 0) {
                $stringHitung .= '-(1/' . $i . ')';
                $hasil = $hasil - (1 / $i);
            } else {
                $stringHitung .= '+(1/' . $i . ')';
                $hasil = $hasil + (1 / $i);
            }
            $i++;

            $looping++;
        }
        echo 'hasil sampai ke n = ' . $n . ' adalah<br>' . $stringHitung . ' = ' . $hasil;
        echo '<br>';
        echo dechex('20');
    }

}