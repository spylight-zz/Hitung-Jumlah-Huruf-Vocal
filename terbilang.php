<?php
function nilai_hasil($nilai) {
	$nilai = abs($nilai);
	$huruf = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];
	$temp = "";
	if ($nilai < 12) {
		$temp = " ". $huruf[$nilai];
	} else if ($nilai <20) {
		$temp = nilai_hasil($nilai - 10). " belas";
	} else if ($nilai < 100) {
		$temp = nilai_hasil($nilai/10)." puluh". nilai_hasil($nilai % 10);
	} else if ($nilai < 200) {
		$temp = " seratus" . nilai_hasil($nilai - 100);
	} else if ($nilai < 1000) {
		$temp = nilai_hasil($nilai/100) . " ratus" . nilai_hasil($nilai % 100);
	} else if ($nilai < 2000) {
		$temp = " seribu" . nilai_hasil($nilai - 1000);
	} else if ($nilai < 1000000) {
		$temp = nilai_hasil($nilai/1000) . " ribu" . nilai_hasil($nilai % 1000);
	} else if ($nilai < 1000000000) {
		$temp = nilai_hasil($nilai/1000000) . " juta" . nilai_hasil($nilai % 1000000);
	} else if ($nilai < 1000000000000) {
		$temp = nilai_hasil($nilai/1000000000) . " milyar" . nilai_hasil(fmod($nilai,1000000000));
	} else if ($nilai < 1000000000000000) {
		$temp = nilai_hasil($nilai/1000000000000) . " trilyun" . nilai_hasil(fmod($nilai,1000000000000));
	}     
	return $temp;
}

function terbilang($nilai) {
    if($nilai<0) {
		$hasil = "minus ". trim(nilai_hasil($nilai));
	} else {
		$hasil = trim(nilai_hasil($nilai));
	}     		
	return $hasil;
}

echo ucwords(terbilang(1250000))." Rupiah";
?>
