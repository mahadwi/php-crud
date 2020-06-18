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
      $tanggalSelesai = date('Y.m.d', strtotime($row['tanggalSewa'] . "+ $row[durasi] days ")) ?>
      <tr>
        <td><?= "$no" ?></td>
        <td><?= "$row[namaBuku]" ?></td>
        <td><?= "$row[penyewa]" ?></td>
        <td><?= "$row[tanggalSewa]" ?></td>
        <td><?= "$row[durasi]" ?></td>
        <td><?= "$tanggalSelesai" ?></td>
        <td>&nbsp;</td>
      </tr>

    <?php
      $no++;
    }
    ?>
  </table>
</body>

</html>