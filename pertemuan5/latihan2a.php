<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bikin Tabel dengan perulangan</title>
</head>

<body>
  <table border="1" cellpadding="3" cellspacing="0">
    <?php for ($i = 1; $i <= 15; $i++) : ?>
      <tr>
        <?php for ($j = 1; $j <= 5; $j++) : ?>
          <td><?php echo "$i,$j"; ?></td>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </table>

</body>

</html>