<?php

$nama = $_POST["nama"];
$nim = $_POST["nim"];
$email = $_POST["email"];

$file = fopen("form_data.txt", "a+");

fwrite($file, "Name: {$nama} <br>");
fwrite($file, "NIM: {$nim} <br>");
fwrite($file, "email: {$email} <br>");

fclose($file);

$files = fopen("form_data.txt", "r");

while(! feof($files)){
    $line = fgets($files);
    echo "{$line} <br>";
}

fclose($files);

?>