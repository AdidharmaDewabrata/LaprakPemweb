<?php

class Mahasiswa{
    public $nim;
    public $nama;
    public $prodi;

    public function __construct ($nim, $nama, $prodi){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
    }

    public function kuliah(){
        echo $this->nama, " datang ke kelas pada hari ini! sungguh anak yang rajin <br>";
    }

    public function ujian(){
        echo $this->nama, " akan menghadapi ujian pada hari ini. <br>";
    }

    public function praktikum(){
        echo $this->nama, " mengikuti praktikum mata kuliah ", $this->prodi, "<br>";
    }

}

$tobby = new Mahasiswa(245150, "Adidharma", "Teknik Informatika");

$tobby->kuliah();
$tobby->praktikum();

$john = new Mahasiswa(23515020, "Jonathan", "Sistem Informasi");

$john->ujian();
$john->praktikum();

?>
