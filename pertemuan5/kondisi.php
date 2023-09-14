<?php
$x = 19;
echo "x = $x </br>";
//Menggunakan statmenet IF -ELSE
if ($x % 2 == 0) {
  echo "$x adalah bilangan genap";
} else {
  echo "$x adalah bilangan ganjil";
}
echo "</br></br>";

//Menggunakan statement IF-ELSEIF-ELSE

$tahun = "2018";
if ($tahun == "2015") {
  echo "Sekarang Tahun  2015";
} elseif ($tahun == "2016") {
  echo "Sekarang Tahun 2016";
} elseif ($tahun == "2017") {
  echo "Sekarang Tahun 2017";
} else {
  echo " Sekarang Tahun 2018";
}
