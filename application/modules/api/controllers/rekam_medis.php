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

class Rekam_medis extends MY_Controller{
    //put your code here
    
    public function data_get(){
        
    }
    public function __construct() {
        parent::__construct();
        $this->load->library('rest');
        Requests::register_autoloader();
    }
    
    public function getrekam_medis_post(){
        $pos_array = $this->input->post('data');
        echo $pos_array;
        die;
                
//                            try {
//                        $request = Requests::get($url, $header);
//                        if (!empty($request->status_code)) {
//                            if ($request->status_code == '200') {
//                                if (!empty($request->body)) {
//                                    $response = json_decode($request->body);
//                                    if ($response->metaData->code == '200') {
//                                        if (!empty($response->response)) {
//                                            $jenisKelamin = strval($response->response->pesertasep->kelamin);
//                                            $namaPasien = strval($response->response->pesertasep->nama);
//                                            $noKartu = strval($response->response->pesertasep->noKartuBpjs);
//                                            $noRm = strval($response->response->pesertasep->noMr);
//                                            $noRujukan = strval($response->response->pesertasep->noRujukan);
//                                            $tglLahir = strval($response->response->pesertasep->tglLahir);
//                                            $tglPelayanan = strval($response->response->pesertasep->tglPelayanan);
//                                            $pelayanan = strval($response->response->pesertasep->tktPelayanan);
//                                            $data['data']['namaPasien'] = $namaPasien;
//                                            $data['data']['noRm'] = $noRm;
//                                            $data['data']['noKartu'] = $noKartu;
//                                            $data['data']['tanggalLahir'] = $tglLahir;
//                                            $data['data']['tanggalPelayanan'] = $tglPelayanan;
//                                            $data['data']['noRujukan'] = $noRujukan;
//                                            $data['data']['kodeJenisKelamin'] = $jenisKelamin;
//                                            if (strtoupper($jenisKelamin) == 'L') {
//                                                $data['data']['jenisKelamin'] = 'Laki-laki';
//                                            } else {
//                                                $data['data']['jenisKelamin'] = 'Perempuan';
//                                            }
//                                            $data['data']['kodePelayanan'] = $pelayanan;
//                                            if (intval($pelayanan) == 2) {
//                                                $data['data']['jenisPelayanan'] = 'Rawat Jalan';
//                                            } else {
//                                                $data['data']['jenisPelayanan'] = 'Rawat Inap';
//                                            }
//                                        } else {
//                                            if (!empty($response->metaData)) {
//                                                $data['message'] = 'No SEP tidak ditemukan';
//                                            } else {
//                                                $data['message'] = 'Alamat service tidak ditemukan. Hubungi Administrator';
//                                            }
//                                        }
//                                    } else {
//                                        $data['message'] = 'No SEP tidak ditemukan';
//                                    }
//                                } else {
//                                    $data['message'] = 'Tidak ada respons dari service BPJS. Hubungi Administrator';
//                                }
//                            } else {
//                                $data['message'] = 'No SEP salah';
//                            }
//                        } else {
//                            $data['message'] = 'Respons dari service BPJS tidak sesuai format. Hubungi Administrator';
//                        }
//                    } catch (Exception $exc) {
//                        $data['report'] .= $exc->getMessage();
//                        $data['report'] .= $exc->getTraceAsString();
//                        $data['message'] = 'Tidak terhubung dengan service BPSJ. Hubungi Administrator';
//                    }
    }
    
}