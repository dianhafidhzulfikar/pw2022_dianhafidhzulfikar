<?php
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs) { ?>

    <ul>
      <li>
        <img src="img/<?= $mhs["gambar"]; ?>">

      </li>
      <li>Nama :<?= $mhs["nama"]; ?></li>
      <li>Nim :<?= $mhs["nim"]; ?></li>
      <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
      <li>Email :<?= $mhs["email"]; ?></li>

    </ul>
  <?php } ?>
</body>

</html>