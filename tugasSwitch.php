<?php

//SOAL
// Buatlah sebuah program pengecekan nilai mahasiswa dengan ketentuan :
// nilai > 80 : A
// nilai > 70 dan < 80 : B
// nilai > 60 dan < 70 : C
// nilai > 0 dan < 60  : D
//
// Note : Wajib menggunakan Switch



$nilai = 80;

echo "Nilai angka : $nilai<br>";

switch (true){
  case ($nilai > 80 && $nilai <= 100) :
    echo "Nilai grade A";
    break;
  case ($nilai > 70 && $nilai <= 80) :
    echo "Nilai grade B";
    break;
  case ($nilai > 60 && $nilai <= 70) :
    echo "Nilai grade C";
    break;
  case ($nilai >=0 && $nilai <=60) :
    echo "Nilai grade D";
    break;
  default :
    echo "Nilai yang diinput salah";
    break;
}



?>
