<?php
// Input Data Pegawai
$nip = "100111";
$nama = "Fitriyani";
$gaji_pokok = "2000000";
$bonus = "500000";
$tunjangan = "100000";
$pajak = "200000";

// Menghitung Gaji Bersih
$gaji_bersih = $gaji_pokok + $bonus +  $tunjangan - $pajak;

//Menampilkan Output
echo "======================<br>";
echo "NIP = ". $nip . "<br>";
echo "Nama Pegawai = ". $nama . "<br>";
echo "======================<br>";
echo "Gaji Pokok = Rp. ". $gaji_pokok . "<br>";
echo "Bonus = Rp. ". $bonus . "<br>";
echo "Tunjangan = Rp. ". $tunjangan . "<br>";
echo "Pajak = Rp. ". $pajak . "<br>";
echo "======================<br>";
echo "Gaji Yang Harus Dibayarkan = Rp. ". $gaji_bersih . "<br>"; 

