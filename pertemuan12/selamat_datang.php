<?php
$nama_anda = htmlspecialchars($_POST["nama-anda"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Welcome, <?php echo $nama_anda ?></title>
</head>

<body>
  <h2>
    Welcome to the Jungle, <?php echo $nama_anda ?>!
  </h2>
</body>

</html>