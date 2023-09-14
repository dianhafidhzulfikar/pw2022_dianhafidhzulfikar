<?php
$angka = [4, 3, 7, 9, 1, 2];
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
  <!-- //pengulangan menggunakan foreach -->
  <?php foreach ($angka as $a) { ?>
    <div><?php echo $a; ?></div>
  <?php } ?>
</body>

</html>