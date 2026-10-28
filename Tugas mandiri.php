<?php

// 1. Class Buku (Menerapkan Enkapsulasi)
class Buku {
    private $kodeBuku;
    private $judul;
    private $penulis;

    public function __construct($kodeBuku, $judul, $penulis) {
        $this->kodeBuku = $kodeBuku;
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function getInfoBuku() {
        return "Judul: {$this->judul} (Penulis: {$this->penulis}, Kode: {$this->kodeBuku})";
    }
}

// 2. Class Anggota (Menerapkan Enkapsulasi)
class Anggota {
    private $idAnggota;
    private $nama;

    public function __construct($idAnggota, $nama) {
        $this->idAnggota = $idAnggota;
        $this->nama = $nama;
    }

    public function getInfoAnggota() {
        return "Nama Anggota: {$this->nama} (ID: {$this->idAnggota})";
    }
}

// 3. Class Peminjaman (Menghubungkan class Buku dan Anggota)
class Peminjaman {
    private $buku;
    private $anggota;
    private $tanggalPinjam;

    public function __construct(Buku $buku, Anggota $anggota, $tanggalPinjam) {
        $this->buku = $buku;
        $this->anggota = $anggota;
        $this->tanggalPinjam = $tanggalPinjam;
    }

    public function prosesPeminjaman() {
        echo "=== DETAIL TRANSAKSI PEMINJAMAN ===<br>";
        echo $this->anggota->getInfoAnggota() . "<br>";
        echo "Meminjam Buku -> " . $this->buku->getInfoBuku() . "<br>";
        echo "Tanggal Pinjam: {$this->tanggalPinjam}<br><br>";
    }
}

// --- PENGUJIAN / DEMO PROGRAM ---

// Membuat objek Buku
$buku1 = new Buku("B001", "Pemrograman Berorientasi Objek dengan PHP", "Gede Herdian");

// Membuat objek Anggota
$anggota1 = new Anggota("A101", "Wayan Sastrawan");

// Membuat objek Peminjaman dengan menyertakan objek Buku dan Anggota
$peminjaman1 = new Peminjaman($buku1, $anggota1, "2026-06-06");

// Menjalankan method untuk menampilkan informasi peminjaman
$peminjaman1->prosesPeminjaman();

?>