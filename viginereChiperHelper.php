<?php

/**
* variable acak tidak boleh ada angka yang berulang
* Untuk membuat kode acak bisa menggunakan shuffle
* $acak = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
* shuffle($acak);
* echo implode(',',$acak);
* jumlah acakKTP harus sesuai dengan length KTPnya yaitu 16
*/


$acakKTP = [12,13,2,5,6,10,0,1,3,11,8,15,7,4,9,14];

$hasil = acakKTP('3604231234567890');
echo "$hasil\n";
$hasil = balikinKTP($hasil);
echo "$hasil\n";

function acakKTP($ktp){
    global $acakKTP;
    if(strlen($ktp)!=16) return $ktp;
    $hasil = '';
    foreach($acakKTP as $k){
        $hasil .= substr($ktp,$k,1);
    }
    return $hasil;
}

function balikinKTP($ktp){
    global $acakKTP;
    $tmps = str_split($ktp);
    $ktps = array();
    $jml = count($tmps);
    for($n=0;$n<$jml;$n++){
        $ktps[$acakKTP[$n]] = $tmps[$n];
    }
    ksort($ktps);
    return implode('',$ktps);
}
