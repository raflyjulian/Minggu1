<?php
//SOAL 1
$kalimat = "Wikrama";
$sub_kalimat = substr($kalimat,-2,1);
echo $sub_kalimat;


echo "<br>";
echo "<br>";


//SOAL 2

for ($i=1; $i <= 10; $i++) { 
  echo $i, " ";;
  
}

echo "<br>";
echo "<br>";


//SOAL 3
for ($a=10; $a >=1; $a--) { 
  echo $a, " ";;
  
}

echo "<br>";
echo "<br>";

//SOAL 4
for ($b=1; $b <= 6 ; $b++) { 
    echo "<h$b>Heading $b</h$b> " ;
    
}

echo "<br>";
echo "<br>";

//SOAL 5
for ($c = 1; $c <= 30; $c++) {
  if ($c % 4 == 0) {
      echo $c , " ";
  }
}

echo "<br>";
echo "<br>";

//SOAL 5

$jumlah_kemungkinan = 0;

for ($d = 5; $d <= 25; $d +=5 ) {
    if (225 % $d == 0) {
        $jumlah_kemungkinan++;
    }
}

echo $jumlah_kemungkinan ;

echo "<br>";
echo "<br>";

//SOAL 7

$datas = [
    [
      'nama' => 'Rafly',
      'rombel' => 'PPLG XI-5',
      'rayon' => 'Cib 3',
      'jk' => 'Laki laki'
    ],
    [
      'nama' => 'salim',
      'rombel' => 'PPLG XI-5',
      'rayon' => 'Cic 6',
      'jk' => 'Laki laki'
    ],
    [
      'nama' => 'heri',
      'rombel' => 'PPLG XI-5',
      'rayon' => 'Cia 1',
      'jk' => 'Laki laki'
    ],
    [
      'nama' => 'tio',
      'rombel' => 'PPLG XI-5',
      'rayon' => 'cia 5',
      'jk' => 'Laki laki'
    ]
];

foreach ($datas as $data) {
	echo "nama : " .$data["nama"]."<br>";
	echo "rombel : " .$data["rombel"]."<br>";
	echo "rayon : " .$data["rayon"]."<br>";
	echo "jk : " .$data["jk"]."<br>";
  echo "<hr>";
}

echo "<br>";
echo "<br>";

//SOAL 8
$bilangan = array(75, 77, 87, 70, 90, 81, 69, 87, 66);

$kompeten = array();
$belum_kompeten = array();

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kompeten[] = $nilai;
    } else {
        $belum_kompeten[] = $nilai;
    }
}

echo "kompeten: ";
foreach ($kompeten as $nilai_kompeten) {
    echo $nilai_kompeten . ' ';
}

echo "<br>";

echo "Belum Kompeten : ";
foreach ($belum_kompeten as $nilai_belum_kompeten) {
    echo $nilai_belum_kompeten . ' ';
}

echo "<br>";
echo "<br>";


//SOAL 9
for ($e = 1; $e <= 3; $e++) {
  for ($j = 1; $j <= 10; $j++) {
      $hasil = $e * $j;
      echo "$e x $j = $hasil" ."<br>";
  }
}

echo "<br>";
echo "<br>";

//SOAL 10
$nama = [
  [
  "nama_barang" => "pasta gigi",
  "harga_barang" => 18000,
  "jumlah_beli" => 1,
  ],
  [
  "nama_barang" => "sabun mandi",
  "harga_barang" => 5000,
  "jumlah_beli" => 3,
  ],
  [
  "nama_barang" => "pasta gigi",
  "harga_barang" => 15000,
  "jumlah_beli" => 5,
  ],
 
];

$total_harga = 0;

foreach ($nama as $barang) {
  $total_harga += $barang["harga_barang"] * $barang["jumlah_beli"];
}

echo "Jumlah Harga Barang: Rp " . number_format($total_harga, 0, ',', '.');


echo"<br>";
echo"<br>";

//SOAL 11
// 11. buatlah kelompok dari bilangan dibawah ini. kelompok pertama berisikan bilangan yang terdapat di kedua variabel
// dan kelompok kedua bilangan yang hanya terdapat disalah satu variabel saja.
// $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
// $bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

// $kelompok1 = [];
// $kelompok2 = [];

// foreach ($bil1 as $angka) {
//   if (in_array($angka,$bil2)) {
//     echo $kelompok1[] = $angka;
//   }
// }

// foreach ($bil2 as $angkaa) {
//   if (!in_array($angkaa, $bil1)) {
//     echo $kelompok2[] = $angkaa;
//   }
// }
// echo "Kelompok 1: " ($kelompok1);
// echo "<br>";
// echo "Kelompok 2: " ($kelompok2);

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

// Kelompok Pertama: Bilangan yang terdapat di kedua variabel
$kelompok_pertama = [];
foreach ($bil1 as $angka) {
    if (in_array($angka, $bil2)) {
        $kelompok_pertama[] = $angka;
    }
}

// Kelompok Kedua: Bilangan yang hanya terdapat di salah satu variabel
$kelompok_kedua = [];
foreach ($bil1 as $angka) {
    if (!in_array($angka, $bil2)) {
        $kelompok_kedua[] = $angka;
    }
}
foreach ($bil2 as $angka) {
    if (!in_array($angka, $bil1)) {
        $kelompok_kedua[] = $angka;
    }
}

// Menampilkan nilai-nilai
echo "Kelompok Pertama: ";
foreach ($kelompok_pertama as $nilai) {
    echo $nilai . " ";
}

echo "<br>";

echo "Kelompok Kedua: ";
foreach ($kelompok_kedua as $nilai) {
    echo $nilai . " ";
}






echo"<br>";
echo"<br>";

//SOAL 12
// 12. tampilkanlah data dibawah ini yang hanya memiliki diskon
$barang = [
    [ 'nama' => 'Ban', 'diskon' => '10' ],
    [ 'nama' => 'oli mesin'],
    [ 'nama' => 'kampas rem'],
    [ 'nama' => 'busi', 'diskon' => '9' ],
    [ 'nama' => 'akumulator', 'diskon' => '7' ],
];

$diskon;

foreach ($barang as $brg) {
  if (isset($brg['diskon'])) {
    echo "Nama: " .$brg['nama'] . " Diskon: " .$brg['diskon'] ."<br>";
  }
}


echo"<br>";
echo"<br>";

//SOAL 13
$dataTahun = [
  [
    'nama' => 'Andi',
    'tahun' => '2008',
  ],
  [
      'nama' => 'Beni',
      'tahun' => '2001',
  ],
  [
      'nama' => 'Dani',
      'tahun' => '2004',
  ],
  [
      'nama' => 'Eko',
      'tahun' => '2006',
  ],
];

$kabisat;

foreach ($dataTahun as $tahun) {
  if ($tahun['tahun'] % 4 == 0 ) {
    echo $kabisat = $tahun['nama'] ." ";
  };
}

echo"<br>";
echo"<br>";

//SOAL 14
// hitunglah jumlah nilai tiap tiap orang
$student = [
  [
      'nama' => 'Andi',
      'nilai' => [80, 78, 82, 78, 88],
  ],
  [
      'nama' => 'Beni',
      'nilai' => [86, 70, 80, 85, 81],
  ],
  [
      'nama' => 'Danii',
      'nilai' => [83, 91, 70, 73, 81],
  ],
  [
      'nama' => 'Eko',
      'nilai' => [89, 85, 84, 86, 88],
  ],
];

foreach ($student as $std) {
  $jumlah = array_sum($std['nilai']);
  echo "Jumlah Nilai " .$std['nama'] ." adalah "  .$jumlah  ."<br>";
}  


?>