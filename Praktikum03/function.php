<?php

function tambah($nilai1, $nilai2)//parameter
{
    echo $nilai1 + $nilai2;
}

tambah(1, 2);//argumen
echo"<br>";

function hitungUmur($tahunLahir)
{
    $tahunSekarang = 2024;

    echo $tahunSekarang - $tahunLahir;
    
}

hitungUmur(2001);