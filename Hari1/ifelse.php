<?php 
//SOAL 1
$a = "ikan";
$b = "ikan";

if( $a == $b){
    echo"$a sama";
}else{
    echo"tidak sama";
}

echo "<br>";
echo "<br>";


//SOAL 2
$c = 8;
$d = 9;

if($c == $d){
    echo"sama";
}else{
    echo max($c,$d);
}

echo "<br>";
echo "<br>";


//SOAL 3
$nilai = 78;

if($nilai >= 78 ){
    echo "lulus";
}else{
    echo "tidak lulus";
}

echo "<br>";
echo "<br>";


//SOAL 4

$angka = -9;

if ($angka >= 0) {
    echo "positif";
}else{
    echo "tidak" ;
}

echo "<br>";
echo "<br>";


//SOAL 5
$agk = 136;

if($agk % 2 == 0){
    echo"genap";
}else{
    echo"ganjil";
}

echo "<br>";
echo "<br>";


//SOAL 6
$ak = 176;
if($ak % 6 == 0){
    echo"ya kelipatan 6";
}else{
    echo"tidak kelipatan 6";
}

echo "<br>";
echo "<br>";


//SOAL 7
$z = 7;
if(is_string($z)){
    echo"string";
}else{
    echo"numerik";
}

echo "<br>";
echo "<br>";


//SOAL 8
$x ="";
if($x == null){
    echo"ada";
}else{
    echo"tidak ada";
}

echo "<br>";
echo "<br>";


//SOAL 9
$umur = 16;

if($umur > 17 ){
    echo"sudah dapat bikin ktp";
}else{
    echo"belum dapat bikin ktp";
}


echo "<br>";
echo "<br>";

//SOAL 10
$andi = 154000;
$minimal = 100000;

if($andi >= $minimal){
    $hasil= $andi - $andi * 0.07;
    echo"perlu dibayar sebesar $hasil";
}else{
    echo "tidak";
}

echo "<br>";
echo "<br>";



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
echo "<br>";

$nilaiAndi = 90;
$kehadiran = 100;

if ($nilaiAndi > 85 && $kehadiran > 98) {
    echo"Siswa berprestasi";
}else{
    echo"tidak berprestasi";
}

?>
