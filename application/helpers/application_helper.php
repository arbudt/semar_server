<?php

if (!function_exists('tglSekarang')) {

    function tglSekarang() {
        date('d-m-Y');
    }

}

if (!function_exists('jamSekarang')) {

    function jamSekarang() {
        date('h:i:s');
    }

}

if (!function_exists('dateReverse')) {

    function dateReverse($date='') {//d-m-Y
        $tgl = $date;
        if (empty($tgl)) {
            $tgl = tglSekarang();
        }
        $arr = explode('-', $tgl);
        return $arr[2] . '-' . $arr[1] . '-' . $arr[0];
    }

}

