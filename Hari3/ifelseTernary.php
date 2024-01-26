<?php
$nilaii = 6;
echo $nilaii > 8 ? 'Sangat Baik' : 'Baik';

echo "<br>";
echo "<br>";

$harga = 20000;

$beli = $harga >= 15000 ? 'Mendapat diskon' : 'Tidak mendapat diskon';
echo $beli;

echo "<br>";
echo "<br>";

$a = "ikan";
$b = "ikan";

echo $ucapan = $a == $b ? 'Ya sama' : 'Tidak sama';

echo "<br>";
echo "<br>";

$n = 9;

echo $hasil = $a < 0 ? 'negatif' : ($n > 0 ? 'Postif' : 'cacah');

echo "<br>";
echo "<br>";

$day = date('l');
echo $jadi = $day == 'Wednesday' ? "%5" : ($day == 'Monday' ? "%2" : "%0");

echo "<br>";
echo "<br>";



$panjang = 13;
$lebar = 9;
$luas = $panjang * $lebar;

echo $tipe = $luas < 90 ? "Tipe rumah 36" : ($luas >= 90 && $luas <= 96 ? "Tipe rumah 45" 
    : ($luas >= 96 && $luas <= 120 ? "Tipe rumah 54"   
    : ($luas >= 120 && $luas <= 150 ? "Tipe rumah 60" : "Tipe rumah 70")));


echo "<br>";
echo "<br>";

$beratBadan = 44;
$tinggiBadan = 148;

$MeterTinggiBadan= $tinggiBadan/100;

$imt = $beratBadan / ($MeterTinggiBadan** 2);

// if ($imt < 18.5) {
//     echo "Berat Badan Kurang";
// }elseif ($imt >= 18.5 && $imt <= 22.9 ) {
//     echo "Berat Badan Normal";
// }elseif ($imt >= 22.9 && $imt <= 24.9) {
//     echo "Berat Badan Lebih";
// }else{
//     echo "Obesitas";
// }
echo $jadinya = $imt < 18.5 ? "Berat badan kurang" : ($imt >= 18.5 && $imt <= 22.9 ? "Berat Badan normal" 
    : ($imt >= 22.9 && $imt <= 24.9 ? "Berat Badan lebih" : "Obesitas"));


echo "<br>";
echo "<br>";

$adni = 2005;
$eko = 2004;

// if ($adni % 4 == 0 && $eko % 4 == 0) {
//     echo "dua dua nya kabisat";
// }elseif ($eko % 4 == 0) {
//     echo "eko yg kabisat";
// }elseif ($adni % 4 == 0) {
//     echo "adni yang kabisat";
// }else{
//     echo"tidak ada";
// }

echo $kabisat = $adni % 4 == 0 && $eko % 4 == 0 ? "Dua duanya kabisat" : ($eko % 4 == 0 ? "eko yang kabisat" 
    : ($adni % 4 == 0 ? "adni yang kabisat" : "tidak ada yang kabisat"));

echo "<br>";
echo "<br>";


$eko = 150000;
$diskon = 10000;

echo $bayar = $eko > 100000 ? " mendapatkan diskon $diskon jadi yang harus dibayar sebesar " .number_format($eko-$diskon) : "Tidak dapat diskon jadi $eko";

echo "<br>";
echo "<br>";


//BOLEANNNNNn
$persentase = 100;
$izinsakit = 1;
$alfa = 0;

echo $hasill = $izinsakit ? $persentase -3 : ($alfa ? $persentase-5 : $persentase);

echo "<br>";
echo "<br>";
echo "------------------------------------------------------------";
echo "<br>";
echo "<br>";

//SOAL 1
$andi = 850000;
$bunga = 0.05 * $andi;

echo $total = $andi > 500000 ? "Mendapatkan bunga %5 jadii ".number_format($andi+$bunga) : "tidak dapat bunga tetap menjadi $andi";


echo "<br>";
echo "<br>";


//SOAL 2
$jam = 19.00;
$jam2 = 18.55;
$pm = 12;
$ubah = $jam - $pm;
$ubah2 =$jam2 - $pm;
$menit = 0;
$detik = "00";
$detik2 = "55";

echo $n = $jam > $pm ? "jadi jam $menit$ubah.$detik pm" : "gatau"; 
echo "<br>";
echo $m = $jam2 > $pm ? "jadi jam $menit$ubah2 pm" : "gatau"; 

echo "<br>";
echo "<br>";


//SOAL 3
$hariIni = date('l');

echo $upacara = $hariIni == 'Monday' ? "Upacara" : " tidak upacara";

echo "<br>";
echo "<br>";


//SOAL 4
$z = 75;
echo $predikat = $z >= 90 ? "A" : ($z >= 75 ? "B" : "c");


echo "<br>";
echo "<br>";


//SOAL 5
$status = "sakit";
$poin = 100;

echo $y = ($status == 'sakit' OR $status == 'izin') ? $poin - 3 :($status == 'alfa' ? $poin - 5 : 0);


?>


