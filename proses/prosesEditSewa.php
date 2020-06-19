<?php
require "../koneksi/koneksi.php";

$id = $_GET['id'];
//ambil data dari form input
$namaBuku    = $_POST['nama']; //"nama" dari name form input
$penyewa     = $_POST['penyewa'];
$durasi      = $_POST['durasi'];
$tanggalSewa = date('Y.m.d');

//masukan ke database
$update = "UPDATE sewa SET judul = '$namaBuku', penyewa = '$penyewa', durasi = '$durasi' WHERE id = '$id'";
$query = mysqli_query($koneksi, $update);
// var_dump($query);

header("Location: ../index.php");
