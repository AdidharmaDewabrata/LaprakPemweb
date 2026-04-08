<?php

$file = fopen("tulis1.txt", "a+");

if($file){
    $line = fwrite($file, "dan aku suka mata kuliah KAL seru");
}

echo file_get_contents("tulis1.txt");

fclose($file);

?>