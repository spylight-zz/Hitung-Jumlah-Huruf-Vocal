<?php
function hitung_vocal($teks) {
  $teks_mentah = trim($teks); //buang spasi di awal dan akhir
  $teks = str_replace(" ", "", $teks_mentah); //buang spasi yang ada di tengah kata
  $jumlah = strlen($teks); //menghitung jumlah karakter pada variable $teks
  
  //substr_count adalah fungsi menghitung jumlah huruf/kalimat
  $a = substr_count($teks, "a"); //hitung jumlah huruf "a"
  $i = substr_count($teks, "i"); //hitung jumlah huruf "i"
  $u = substr_count($teks, "u"); //hitung jumlah huruf "u"
  $e = substr_count($teks, "e"); //hitung jumlah huruf "e"
  $o = substr_count($teks, "o"); //hitung jumlah huruf "o"
  
  $vocal = $a+$i+$u+$e+$o; //hitung total jumlah huruf vocal
  //$konsonan = $jumlah - $vocal;
  
  // echo "Kalimat <b>\"".$teks_mentah."\"</b> memiliki : <br>";
  echo "Jumlah karakter = $jumlah\n";
  echo "jumlah huruf vocal = $vocal\n";
  echo "a = $a\ni = $i\nu = $u\ne = $e\no = $o\n";
}

$kalimat = "ini adalah contoh kalimat";
hitung_vocal($kalimat);
