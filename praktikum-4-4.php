<?php

$prodi = ["Teknik Informatika", "Teknologi Informasi", "Pendidikan Teknologi Informasi", "Sistem Informasi", "Teknik Komputer"];

foreach($prodi as $prodi){
    echo $prodi, "<br>";
}

$astra = ["Target"=>"4th Semester Students", "Duration"=>"6 Month Program", "Requirements"=>"GPA above 3.5"];
$djarum = ["Target"=>"4th Semester Students", "Duration"=>"2 Year Program", "Requirements"=>"GPA above 3.2"];

echo "<br>";

foreach($astra as $key => $value){
    echo $key, ": ", $value, "<br>";
}

echo "<br>";

foreach($djarum as $key => $value){
    echo $key, ": ", $value, "<br>";
}


?>