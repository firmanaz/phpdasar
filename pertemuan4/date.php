<?php
    // Date
    // Menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp / EPOCH Time
    // Detik yang sudah berlalu sejak 1 Januari 1970
    // echo time();
    // echo date("l", time()+60*60*24*100);

    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date ("l", mktime (0,0,0,10,29,2000));

    // strtotime
    echo date("l", strtotime("10 Nov 1999"));
?>