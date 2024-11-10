<?php
// Kelas induk Pegawai
class Pegawai {
    public $nama;
    public $gajiPokok;

    public function __construct($nama, $gajiPokok) {
        $this->nama = $nama;
        $this->gajiPokok = $gajiPokok;
    }

    public function infoPegawai() {
        echo "Nama: {$this->nama}, Gaji Pokok: {$this->gajiPokok}<br>";
    }
}

// Kelas turunan KaryawanTetap
class KaryawanTetap extends Pegawai {
    public $tunjangan;

    public function __construct($nama, $gajiPokok, $tunjangan) {
        parent::__construct($nama, $gajiPokok);
        $this->tunjangan = $tunjangan;
    }

    public function infoTunjangan() {
        echo "Tunjangan: {$this->tunjangan}<br>";
    }
}

// Kelas turunan Freelance
class Freelance extends Pegawai {
    public $jamKerja;
    public $upahPerJam;

    public function __construct($nama, $gajiPokok, $jamKerja, $upahPerJam) {
        parent::__construct($nama, $gajiPokok);
        $this->jamKerja = $jamKerja;
        $this->upahPerJam = $upahPerJam;
    }

    public function hitungGaji() {
        $totalGaji = $this->jamKerja * $this->upahPerJam;
        echo "Jam Kerja: {$this->jamKerja}, Upah per Jam: {$this->upahPerJam}<br>";
        echo "Total Gaji: {$totalGaji}<br>";
    }
}

// Membuat objek KaryawanTetap dan Freelance
$karyawanTetap = new KaryawanTetap("Ali", 5000000, 1000000);
$freelance = new Freelance("Budi", 0, 50, 100000);

// Memanggil metode untuk KaryawanTetap
$karyawanTetap->infoPegawai();
$karyawanTetap->infoTunjangan();
echo "<br>";

// Memanggil metode untuk Freelance
$freelance->infoPegawai();
$freelance->hitungGaji();
?>