<?php
$asean = [
  "Indonesia" => "Jakarta",
  "Singapura" => "Singapura",
  "Malaysia" => "Kuala Lumpur",
  "Brunei" => "Bandar Sri Begawan",
  "Thailand" => "Bangkok"
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>ASEAN</title>
</head>

<body>
  <h1>Daftar Negara Asean AWAL :</h1>
  <?php foreach ($asean as $s => $j) : ?>
    <li><?= "$s : $j " ?></li>

  <?php endforeach;  ?>
</body>

</html>