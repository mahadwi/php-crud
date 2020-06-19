<?php
include_once("koneksi/koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Read Sewa</title>
</head>

<body>
  <div><a href="formSewa.php">Tambah Data</a></div>
  <table border=1>
    <tr>
      <th>No</th>
      <th>Judul Buku</th>
      <th>Nama Penyewa</th>
      <th>Tanggal Sewa</th>
      <th>Durasi</th>
      <th>Tanggal Selesai</th>
      <th>Action</th>
    </tr>

    <?php
    //perintah read dari database tabel sewa
    $query = mysqli_query($koneksi, "SELECT * FROM sewa");

    //keluarkan isi database ke tabel menggunakan while/perulangan
    $no = 1;
    //mysqli_fetch_array digunakan untuk mengeluarkan isi dari database
    while ($row = mysqli_fetch_array($query)) {
      $tanggalSelesai = date('Y.m.d', strtotime($row['tanggal_sewa'] . "+ $row[durasi] days ")) ?>
      <tr>
        <td><?= "$no" ?></td>
        <td><?= "$row[judul]" ?></td>
        <td><?= "$row[penyewa]" ?></td>
        <td><?= "$row[tanggal_sewa]" ?></td>
        <td><?= "$row[durasi]" ?></td>
        <td><?= "$tanggalSelesai" ?></td>
        <td><a href="formEdit.php?id=<?= "$row[id]" ?>">Edit | <a href="proses/delete.php?id=<?= "$row[id]" ?>">Delete</a></a></td>
      </tr>

    <?php
      $no++;
    }
    ?>
  </table>
</body>

</html>