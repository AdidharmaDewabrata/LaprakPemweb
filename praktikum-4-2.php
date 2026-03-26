<?php

function sum($num1, $num2){
    $sum = $num1 + $num2;
    echo "Hasil penjumlahan: ", $sum, "<br>";
}

function get_length($string){
    $length = strlen($string);
    echo $string, " Memiliki panjang string: ", $length, "<br>";
}

sum(5, 8);

sum(67, 21);

echo "<br>";

get_length("Adidharma");
get_length("Tobby");

?>