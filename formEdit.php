<?php
include_once("koneksi/koneksi.php");

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM sewa WHERE id = '$id'");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Edit Sewa</title>
</head>

<body>
  <form action="proses/prosesEditSewa.php?id=<?= $id ?>" method="post">
    <label>Nama Buku</label>
    <div><input type="text" name="nama" value="<?= $row['judul'] ?>"></div>
    <br>
    <label>Penyewa</label>
    <div><input type="text" name="penyewa" value="<?= $row['penyewa'] ?>"></div>
    <br>
    <label>Durasi</label>
    <div><input type="text" name="durasi" value="<?= $row['durasi'] ?>"></div>
    <br>
    <button type="submit" name="submit">Edit</button>
    <a href="index.php">Home</a>
  </form>
</body>

</html>