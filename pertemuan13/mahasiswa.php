<?php
$conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal!");
mysqli_select_db($conn, "pw_2022") or die("Database Salah!");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>

  <?php
  $results = mysqli_query($conn, "SELECT * FROM mahasiswa");
  while ($row = mysqli_fetch_assoc($results)) {
  ?>
    <ul>
      <li>
        <img src="img/<?= $row["gambar"]; ?>">

      </li>
      <li>Nama :<?= $row["nama"]; ?></li>
      <li>Nim :<?= $row["nim"]; ?></li>
      <li>Jurusan :<?= $row["jurusan"]; ?></li>
      <li>Email :<?= $row["email"]; ?></li>

    </ul>
  <?php } ?>
</body>

</html>