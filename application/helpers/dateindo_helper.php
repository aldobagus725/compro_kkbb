<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('dateID')){
    function dateID($date){
        $hari = array ( 1 =>    'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
            'Sabtu',
            'Minggu'
        );
        $bulan = array (1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );
        $split 	  = explode('-', substr($date,0,10));
        // var_dump( $split);
        // die();
        // 2022-02-28 22:03:59
        $tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
        $num = date('N', strtotime($date));
        // var_dump($split);
        // echo"<br>";
        // var_dump($date);
        // echo"<br>";
        // var_dump($tgl_indo);
        // echo"<br>";
        // var_dump($hari[$num] . ', ' . $tgl_indo);

        // die();
        return $hari[$num] . ', ' . $tgl_indo;
    }   
}