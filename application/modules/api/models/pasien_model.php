<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pasien_model
 *
 * @author ziaha
 */
class Pasien_model extends MY_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    
    public function get($pasien_id){
        $q = $this->db->from('mst_pasien')->where('mpas_id', $pasien_id)->get();
        
        return $q->num_rows() > 0 ? $q->row() : null;
    }
    //put your code here
    
    public function get_norm_nasional($rm =''){
        $q = $this->db->select('mpas_id')
                ->where('tkunj_no_rm', $rm)
                ->from('trans_kunjungan')
                ->get();
        if($q> 0){
            
        }
    }
    
     
    function  save_pasien($pasien_id, $mrs_id, $tkun_no_id){
        $data = array(
          'mpas_id' =>$pasien_id,
            'mrs_id' => $mrs_id,
            'tkunj_no_rm' => $tkun_no_id
        );
        print_r($data);die;
        $id = $this->db->insert('trans_kunjungan', $data);
        return $id > 0;
    }
}
