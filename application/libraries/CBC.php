<?php

class CBC {

    function __construct() {

    }

    /*
     * proses enkripsi
     */

    public function enkripsi($plainteks, $kunci) {
        /*
         * memasangkan kunci
         */
        $arrPlainteks = str_split($plainteks);
        $panjangPlainteks = count($arrPlainteks);
        $arrKunci = $this->pemasanganKunci($kunci, $panjangPlainteks);

        /*
         * perulangan enkripsi data
         */
        $cipherteks = "";
        $Ci = "00000000";
        for ($i = 0; $i < $panjangPlainteks; $i++) {
            $Pi = $this->charToBiner($arrPlainteks[$i]);
            $Ki = $this->charToBiner($arrKunci[$i]);
            $Ci = $this->chiper($Pi, $Ki, $Ci);
            $cipherteks = $cipherteks . "   " . $Ci;
        }
        /*
         * conversi ke Hexadesimal
         */
        return $this->binerToHexa($cipherteks);
    }

    /*
     * konversi biner to teks ASCii
     */

    function binerToASCii($biner, $bit = 8) {
        $arrBinerBit = str_split(str_replace(' ', '', $biner), $bit);
        $teksAscii = "";
        for ($i = 0; $i < count($arrBinerBit); $i++) {
            $teksAscii = $teksAscii . chr(bindec($arrBinerBit[$i]));
        }
        return $teksAscii;
    }

    /*
     * konversi biner to teks Hexadesimal
     */

    function binerToHexa($biner, $bit = 8) {
        $arrBinerBit = str_split(str_replace(' ', '', $biner), $bit);
        $teksHexa = "";
        for ($i = 0; $i < count($arrBinerBit); $i++) {
            /*
             * jika digit hexadesimal = 1 maka ditambahkan karakter 0 didepannya
             * digunakan untuk kesetaraan panjang gidit hexadesimal
             * agar mempermudah dalam proses decripsi
             */
            $teksHexa = $teksHexa . str_pad(dechex(bindec($arrBinerBit[$i])), 2, '0', STR_PAD_LEFT);
        }
        return $teksHexa;
    }

    /*
     * fungsi operasi XOR
     */

    function _xor($text1, $text2) {
        for ($i = 0; $i < strlen($text1); $i++) {
            $text1[$i] = intval($text1[$i]) ^ intval($text2[$i]);
        }
        return $text1;
    }

    /*
     * menggeser bit ke kiri sebanyak $length
     */

    function wrappLeft($binar, $length = 1) {
        return substr($binar, $length, (strlen($binar) - $length)) . substr($binar, 0, $length);
    }

    /*
     * menggeser bit ke kanan sebanyak $length
     */

    function wrappRight($binar, $length = 1) {
        return substr($binar, (strlen($binar) - $length), $length) . substr($binar, 0, (strlen($binar) - $length));
    }

    /*
     * proses Chiper setiap karakter dengan kunci dan Ci
     */

    function chiper($Pi, $Ki, $Ci) {
        /*
         * $Pi XOR $Ci
         */
        $PiCi = $this->_xor($Pi, $Ci);
        /*
         * $PiCi XOR $Ki
         */
        $E = $this->_xor($PiCi, $Ki);
        /*
         * geser 1 bit ke keri
         */
        $W = $this->wrappLeft($E);
        return $W;
    }

    /*
     * fungsi untuk mengkonversi karakter ke biner
     */

    function charToBiner($char, $bit = 8) {
        return str_pad(decbin(ord($char)), $bit, '0', STR_PAD_LEFT);
    }

    /*
     * fungsi untuk mengkonversi karakter hexadesimal ke biner
     */

    function hexaToBiner($hexa, $bit = 8) {
        return str_pad(decbin(hexdec($hexa)), $bit, '0', STR_PAD_LEFT);
    }

    /*
     * fungsi memasangkan plainteks dengan kunci
     * mengembalikan array plainteks dan array kunci
     */

    function pemasanganKunci($kunci, $panjangPlainteks) {
        /*
         * memasangkan setiap karakter plainteks dengan kunci
         * setiap satu karakter plainteks dipasangkan dengan satu karakter kunci
         * jika kunci habis (telah terpakai semua) maka digukanan karakter kunci dari awal lagi
         */
        $arrKunci = str_split($kunci);
        $panjangKunci = count($arrKunci);

        $dataKunci = array();
        $i = 0;
        for ($j = 0; $j < $panjangPlainteks; $j++) {
            if ($i == $panjangKunci) {
                $i = 0;
            }
            $dataKunci[$j] = $arrKunci[$i];
            $i++;
        }
        return $dataKunci;
    }

    /*
     * proses dekripsi data
     */

    function dekripsi($cipherteks, $kunci) {
        /*
         * membagi string hexadesimal menjadi array hexa per 2 digit
         */
        $arrCipherteksHexa = str_split(str_replace(' ', '', $cipherteks), 2);
        /*
         * panjang biner Ciperteks
         */
        $panjangCipherteks = count($arrCipherteksHexa);

        /*
         * memasangkan kunci sesuai panjang Cipherteks
         */

        $arrKunci = $this->pemasanganKunci($kunci, $panjangCipherteks);

        $plainteks = "";
        $Ci = "00000000";
        /*
         * perulangan dekripsi per biner 8 bit
         */
        for ($i = 0; $i < $panjangCipherteks; $i++) {
            $Pi = $this->hexaToBiner($arrCipherteksHexa[$i]);
            $Ki = $this->charToBiner($arrKunci[$i]);
            if ($i > 0) {
                $Ci = $this->hexaToBiner($arrCipherteksHexa[$i - 1]);
            }
            $Di = $this->plainer($Pi, $Ki, $Ci);
            $plainteks = $plainteks . " " . $Di;
        }
        return $this->binerToASCii($plainteks, 8);
    }

    /*
     * proses dekripsi setiap biner terhadap Kunci dan Ci
     */

    function plainer($Pi, $Ki, $Ci) {
        /*
         * geser 1 bit ke kanan
         */
        $Pi = $this->wrappRight($Pi);
        /*
         * $Pi XOR $Ki
         */
        $PiKi = $this->_xor($Pi, $Ki);
        /*
         * $PiKi XOR $Ci
         */
        $D = $this->_xor($PiKi, $Ci);
        return $D;
    }

}

