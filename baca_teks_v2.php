<?php

$file = fopen("data.txt","r");

if ($file){

    while(! feof($file)){
        $line = fgets($file);
        echo $line, "<br>";
    }
    fclose($file);
}

?>