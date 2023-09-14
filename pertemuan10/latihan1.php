<?php
$angka = [21, 3, 4, 65, 78, 32];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
  <style>
    div {
      width: 50px;
      height: 50px;
      background-color: salmon;
      text-align: center;
      line-height: 50px;
      margin: 3px;
      float: left;
    }
  </style>
</head>

<body>
  <!-- //pengulangan menggunakan for -->
  <?php for ($i = 0; $i < count($angka); $i++) { ?>
    <div> <?php echo $angka[$i]; ?></div>
  <?php } ?>
</body>

</html>