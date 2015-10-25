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
class Rekam_medis_model extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getdataRs($noRmLocal) {
        $data = NULL;
        $query1 = $this->db->query("
            SELECT `mpas_id` FROM `trans_kunjungan` WHERE `tkunj_no_rm` = '$noRmLocal'
            ");
        if ($query1->num_rows() > 0) {
            $idRmNasional = $query1->row()->mpas_id;
            $query3 = $this->db->query("
            SELECT
            `mrs_id` AS id_rs,
            `mrs_nama` AS nama_rs,
            '' AS no_rm
            FROM `mst_rumah_sakit` WHERE `mrs_isaktif` = '1'
            AND mrs_id NOT IN(
            SELECT 
            trans_kunjungan.`mrs_id`
            FROM trans_kunjungan
            JOIN mst_rumah_sakit ON mst_rumah_sakit .mrs_id = trans_kunjungan.mrs_id
            WHERE `mpas_id` ='$idRmNasional'
            )

            UNION

            SELECT
            trans_kunjungan.`mrs_id` AS id_rs,
            mst_rumah_sakit .`mrs_nama` AS nama_rs,
            trans_kunjungan.`tkunj_no_rm` AS no_rm
            FROM trans_kunjungan
            JOIN mst_rumah_sakit ON mst_rumah_sakit .mrs_id = trans_kunjungan.mrs_id
            WHERE `mpas_id` ='$idRmNasional'
            ");
            if ($query3->num_rows() > 0) {
                $data = $query3->result();
            }
        } else {
            $query2 = $this->db->query("
            SELECT
            `mrs_id` AS id_rs,
            `mrs_nama` AS nama_rs,
            '' AS no_rm
            FROM `mst_rumah_sakit` WHERE `mrs_isaktif` = '1'
            ");
            if ($query2->num_rows() > 0) {
                $data = $query2->result();
            }
        }
        return $data;
    }

}
