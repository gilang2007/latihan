<?php
$nilai=90;

if ($nilai > 90) {
    echo "prediksi Nilai A+";
}elseif ($nilai >80 && $nilai <=90) {
    echo "predikat Nilai A";
}elseif ($nilai >70 && $nilai <=80) {
    echo "prediksi Nilai B+";
}elseif ($nilai >60 && $nilai <=70) {
    echo "prediksi Nilai B";
}elseif ($nilai >50 && $nilai <=60) {
    echo "prediksi Nilai C+";
}elseif ($nilai >40 && $nilai <=50) {
    echo "prediksi Nilai C";
}elseif ($nilai >30 && $nilai <=40) {
    echo "prediksi Nilai D";
}else {
    echo "predikat Nilai E";
}

?>