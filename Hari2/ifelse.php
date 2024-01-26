<?php 



$h = 9;
if($h > 0 ){
    echo "Positif";
    echo "<br>";
    if ($h > 10) {
        echo"lebih besar";
    }else{
        echo"tidak";
    }
}else{
    echo "negatif";
}



echo "<br>";

$nilaiAndi = 90;
$kehadiran = 100;

if ($nilaiAndi > 85 && $kehadiran > 98) {
    echo"Siswa berprestasi";
}else{
    echo"tidak berprestasi";
}

echo "<br>";
echo "<br>";
echo "------------------------------------------------------";
echo "<br>";


//SOAL 1
$nilai = 50;

if ($nilai > 90 ) {
    echo "Predikat A";
}elseif ($nilai > 75) {
    echo"Predikat B";
}else{
    echo "Predikat C";
}


echo "<br>";
echo "<br>";


//SOAL 2
$usia = 17;
if ($usia >= 6 && $usia <= 12) {
    echo "Waktu tidur yang baiknya 10 jam";
}elseif ($usia >= 12 && $usia <= 18) {
    echo "Waktu tidur yang baiknya 8-9 jam";
}elseif ($usia >= 18 && $usia <= 40) {
    echo "Waktu tidur yang baiknya 7-8 jam";
}else{
    echo "Tidak ada lagi";
}


echo "<br>";
echo "<br>";

//SOAL 3
$a = 9;
if($a > 0){
    echo"Positif";
}elseif ($a < 0) {
    echo"negatif";
}else{
    echo"cacah";
}

echo "<br>";
echo "<br>";


//SOAL 4
// 4. di suatu rumah produksi yang memiliki jam kerja 8 jam, jika pegawai bekerja melebihi jam kerja berhak 
// mendapatkan kompensasi berupa Rp.30.000 di jam berikutnya, jika dani bekerja dari pukul 8 pagi lalu pulang
// di pukul 10 malam, berapakah kompensasi yang akan diterima dani?



$kerjadani = 14;
$bonus = 30000;

if ($kerjadani > 8) {
    $total = ($kerjadani - 8) * $bonus;
    echo "mendapatkan bonus Rp." .number_format( $total);
}

echo "<br>";
echo "<br>";

//SOAL 5


// adni lahir di tahun 2004 dan eko lahir 3 tahun sebelum andi, dari kedua orang tersebut siapakah 
// yang lahir di tahun kabisat? apakah andi atau eko atau keduanya?

$adni = 2004;
$eko = 2001;

if ($adni % 4 == 0 && $eko % 4 == 0) {
    echo "dua dua nya kabisat";
}elseif ($eko % 4 == 0) {
    echo "eko yg kabisat";
}elseif ($adni % 4 == 0) {
    echo "adni yang kabisat";
}else{
    echo"tidak ada";
}


echo "<br>";
echo "<br>";

//SOAL 6
$beratBadan = 44;
$tinggiBadan = 148;

$MeterTinggiBadan= $tinggiBadan/100;

$imt = $beratBadan / ($MeterTinggiBadan** 2);

if ($imt < 18.5) {
    echo "Berat Badan Kurang";
}elseif ($imt >= 18.5 && $imt <= 22.9 ) {
    echo "Berat Badan Normal";
}elseif ($imt >= 22.9 && $imt <= 24.9) {
    echo "Berat Badan Lebih";
}else{
    echo "Obesitas";
}


echo "<br>";
echo "<br>";

//SOAL 7

$nasiGoreng = 15000;
$ayamBakar = 20000;
$nasiKebuli = 25000;
$anekaJus = 8000;
$esTehManis = 3000;
$esJeruk = 5000;
$belanja = $nasiKebuli * 2 + $ayamBakar + $nasiGoreng * 2;
// $date = date('2024-01-22');
$day = date("l");

if ($day == 'Monday') {
    echo "Mendapatkan Diskon " .$belanja-($belanja*0.02);
}elseif ($day == 'Friday') {
    echo "Mendapatkan Diskon " .$belanja-($belanja*0.05);
}else{
    echo "Tidak Mendapatkan Diskon, Rp. " .number_format($belanja);
}


echo "<br>";
echo "<br>";

//SOAL 8
$panjang = 13;
$lebar = 9;
$luas = $panjang * $lebar;

if ($luas < 90 ) {
    echo "Tipe rumah 36";
}elseif ($luas >= 90 && $luas <= 96) {
    echo "Tipe rumah 45";
}elseif ($luas >= 96 && $luas <= 120) {
    echo "Tipe rumah 54";
}elseif ($luas >= 120 && $luas <= 150) {
    echo "Tipe rumah 60";
}else{
    echo "Tipe rumah 70";
}

echo "<br>";
echo "<br>";

//SOAL 10

$beli = 180000;
$vocher = 10000;
$hadiah = " 1 Dus Permen kaki";


if ($beli >= 100000 && $beli < 150000) {
    echo "anda hanya mendapatkan Vocher $vocher dan yang harus dibayar sebesar Rp.".number_format($beli - $vocher);
}elseif ( $beli > 150000) {
    echo "anda mendapatkan vocher $vocher dan $hadiah, jadi yang harus dibayarkan adalah Rp.".number_format($beli - $vocher); 
}else{
    echo "tidak ada";
}



?>