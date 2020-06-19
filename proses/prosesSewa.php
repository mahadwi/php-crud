<?php
require "../koneksi/koneksi.php";
//ambil data dari form input
$namaBuku = $_POST['nama']; //"nama" dari name form input
$penyewa = $_POST['penyewa'];
$durasi = $_POST['durasi'];
$tanggalSewa = date('Y.m.d');

//masukan ke database
$insert = "INSERT INTO sewa (judul, penyewa, tanggal_sewa, durasi) VALUES ('$namaBuku', '$penyewa', '$tanggalSewa', '$durasi')";
$query = mysqli_query($koneksi, $insert);
// var_dump($query);

header("Location: ../formSewa.php");
