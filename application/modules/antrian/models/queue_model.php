<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of queue_model
 *
 * @author ziaha
 */
class queue_model extends CI_Model{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function get_host($rsid){
        $q = $this->db->select('*')
                ->from('mst_rumah_sakit')
                ->where('mrs_id', $rsid)
                ->get();
        return $q->num_rows() > 0 ? $q->row() : null;
    }
    
    public function get_rumahsakit_list(){
        $q = $this->db->get('mst_rumah_sakit');
        return $q->num_rows() > 0 ? $q->result() : null;
    }
}
