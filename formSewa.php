<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Sewa</title>
</head>

<body>
  <form action="proses/prosesSewa.php" method="post">
    <label>Nama Buku</label>
    <div><input type="text" name="nama" required></div>
    <br>
    <label>Penyewa</label>
    <div><input type="text" name="penyewa"></div>
    <br>
    <label>Durasi</label>
    <div><input type="text" name="durasi"></div>
    <br>
    <button type="submit" name="submit">Submit</button>
    <a href="index.php">Home</a>
  </form>
</body>

</html>