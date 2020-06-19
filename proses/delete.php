<?php
include "../koneksi/koneksi.php";

$id = $_GET['id'];
$delete = mysqli_query($koneksi, "DELETE FROM sewa WHERE id = '$id'");

header("Location: ../index.php");
