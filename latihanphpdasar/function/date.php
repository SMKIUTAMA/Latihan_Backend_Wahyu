<?php

// date
// untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// time
// UNIX Timesstamp / EPOCH time
// waktu ydang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("l, d M Y", time()+60*60*24*100);

// mktime
// untuk membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik,bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,1,25,2002));

// strtotime
// echo date("l", strtotime("25 jan 2002"));

?>