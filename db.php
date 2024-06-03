<?php
require_once './peminjaman.php';


$mhs1 = new Mahasiswa('2022150182', 'Kunti Najma Jalia', '96');
$mhs2 = new Mahasiswa('2020150012', 'Bejo Slamet');
$mhs3 = new Mahasiswa('2020150013', 'Slamet');
$mhs4 = new Mahasiswa('2020150014', 'Bejo');
$mhs5 = new Mahasiswa('2020150015', 'Najma');
$mhs6 = new Mahasiswa('2020150016', 'Titi Suriti');
$mhs7 = new Mahasiswa('2020150017', 'Ajeng Surajeng');

$listMhs = [$mhs1,$mhs2,$mhs3,$mhs4,$mhs5,$mhs6, $mhs7];

$book1 = new Buku('01', 'Bumi Manusia', 'Pramudya', 1945);
$book2 = new Buku('02', 'Kiat Sukse Belajar PHP', 'Koes Sumitro', 2024);
$book3 = new Buku('03', 'Menjadi Mahasiswa Berprestasi', 'Jalia', 2022);
$book4 = new Buku('04', 'Ayam dan Telur Mana Dulu?', 'Dedi Mizwar', 2016);
$book5 = new Buku('05', 'Laut Bercerita', 'Leila S. Chudlori', 1998);

$listBook = [$book1,$book2, $book3,$book4,$book5];