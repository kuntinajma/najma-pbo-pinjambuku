<?php
require_once './buku.php';
require_once './mahasiswa.php';

class Peminjaman {
    public $nimMahasiswa;
    public $kodeBuku;
    private $tanggalPinjam;
    private $tanggalKembali;


    public function __construct(string $kodeBuku, string $nimMahasiswa, string $tanggalPinjam) {
        $this->kodeBukuuku = $kodeBuku;
        $this->nimMahasiswaahasiswa = $nimMahasiswa;
        $this->tanggalPinjam = $tanggalPinjam;
    }


    public function gettanggalKembali() {
        return $this->tanggalKembali;
    }

    public function setTanggalKembali($tanggalKembali) {
        $this->tanggalKembali = $tanggalKembali;
    }

    public function getTanggalPinjam() {
        return $this->tanggalPinjam;
    }

    public function setTanggalPinjam(string $tanggalPinjam){
        $this->tanggalPinjam = $tanggalPinjam;
    }

    public function getData() {
        
        $data = [
            'nim' => $this->nimMahasiswa,
            'kode_buku' => $this->kodeBuku,
            'tanggal_pinjam' => $this->tanggalPinjam,
            'tanggal_kembali' => $this->tanggalKembali,
        ];

        return $data;
    }
}
