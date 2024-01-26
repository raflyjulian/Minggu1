<?php
function biodata($nama, $jurusan = "PPLG") {
	echo "Hallo, $nama! anda diterima sebagai siswa jurusan $jurusan";
}

biodata("Putri");
biodata("Putra", "TJKT");

echo"<br>";
echo"<br>";

function murid($nama,$rombel = "PPLG XI 4", $rayon= "cibedug 3"){
    echo "$nama berada di $rombel dan $rayon";
}

murid("rafly" );
echo"<br>";
murid("Julian");

echo"<br>";
echo"<br>";

function perkalianEmpat($angka){
    $angka *=4;
}
$no = 5;
perkalianEmpat($no);
echo $no;

echo"<br>";
echo"<br>";

function hitungUmur($tahunSekarang,$tahunLahir){
    $umur = $tahunSekarang -  $tahunLahir;
    return $umur;
}



echo "Umur saya adalah " .hitungUmur(2024, 2007) ." tahun";

echo"<br>";
echo"<br>";

function hitungPersegi($panjang,$lebar){
    $hasil = $panjang * $lebar;
    return $hasil;
}

echo "luas persegi tersebut adalah " .hitungPersegi(20, 10) ." meter";

echo"<br>";
echo"<br>";

// function dataIMT($tb,$bb){
//     $hasilnya = $bb / (($tb / 100) **2);
//     return $hasilnya;
// }
// echo "Jadi imtnya adalah " .dataIMT(148,44);

function dataIMT($tb,$bb){
    $mtb  = $tb / 100;
    $hasilnya = $bb / ($mtb**2);
    if ($hasilnya < 18.5) {
        echo "Berat Badan Kurang " .$hasilnya;
    }elseif ($hasilnya >= 18.5 && $hasilnya <= 22.9 ) {
        echo "Berat Badan Normal " .$hasilnya;
    }elseif ($hasilnya >= 22.9 && $hasilnya <= 24.9) {
        echo "Berat Badan Lebih " .$hasilnya;
    }else{
        echo "Obesitas";
    }
    return $hasilnya;
}
dataIMT(148,44);

echo"<br>";
echo"<br>";

function hari($tanggal){
    $day = date('l', strtotime($tanggal));
    if ($day == 'Monday') {
        echo 'senin';
    }elseif ($day == 'Tuesday') {
        echo 'selasa';
    }elseif ($day == 'Wednesday') {
        echo 'Rabu';
    }elseif ($day == 'Thursday') {
        echo 'kamis';
    }elseif ($day == 'Friday') {    
        echo 'Jumat';
    }elseif ($day == 'Saturday') {
        echo 'sabtu';
    }else{
        echo 'Minggu';
    }
    return $day;
}

hari('2024-01-21');



?>