<?php
    // Pertemuan 2 - PHP Dasar
    // Sintaks PHP

    // Standar Output
    // echo, print
    // print_r
    // var_dump

    // Penulisan sintaks PHP
    // 1. Php di dalam HTML
    // 2. HTML di dalam Php

    // Variabel dan Tipe Data
    // Variabel
    // tidak boleh diawali dengan angka, tapi boleh mengandung angka
    // $nama = "Firman Abdul Zaelani";
    // echo "Halo, nama saya $nama";

    // Operator
    // aritmatika + - / * %
    // $x = 30;
    // $y = 15;
    // echo "$x * $y";

    // penggabung string / concatenation / concat
    // .
    // $nama_depan = "Firman";
    // $nama_tengah = "Abdul";
    // $nama_belakang = "Zaelani";
    // echo $nama_depan . " " . $nama_tengah . " " . $nama_belakang;

    // Assignment
    // =, +=, -=, *=, /=, %=, .=
    // $x = 1;
    // $x += 5;
    // echo $x;
    // $nama = "Firman";
    // $nama .= " Abdul Zaelani";
    // echo $nama;

    // Perbandingan
    // <, >, <=, >=, ==, !=
    // var_dump(1 < 5);

    // Identitas
    // ===, !==
    // var_dump(1 === "1")

    // Logika
    // &&, ||, !
    $x = 30;
    var_dump($x < 20 && $x % 2 == 0);

?>