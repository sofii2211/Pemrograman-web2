<?php

class Mahasiswa
{
    public $namaMahasiswa, $nim, $domisili, $prodi, $ipk;

    function __construct($namaMahasiswa, $nim, $domisili, $prodi, $ipk)
    {
        $this->namaMahasiswa = $namaMahasiswa;
        $this->nim = $nim;
        $this->domisili = $domisili;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    function setPredikatIPK($ipk)
    {
        if ($ipk > 3.5) {
            echo "Cumlaude";
        } else {
            echo "You did a great job!";
        }
    }
}

$mahasiswa = new Mahasiswa("Chenle", "6368917989", "Kwangya", "TI", "3.75");
echo "Nama Lengkap: " . $mahasiswa-> namaMahasiswa . "<br>";
echo "NIM: " . $mahasiswa->nim . "<br>";
echo "Domisili: " . $mahasiswa->domisili . "<br>";
echo "Prodi: " . $mahasiswa->prodi . "<br>";
echo "IPK: " . $mahasiswa->ipk . "<br>";
$mahasiswa->setPredikatIPK($mahasiswa->ipk);