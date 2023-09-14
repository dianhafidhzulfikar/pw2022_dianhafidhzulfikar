<?php
//function untuk koneksi ke DB
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB Gagal !");
  mysqli_select_db($conn, "pw_2022") or die("Database Salah");
  return $conn;
}
//end of function
//function untuk query

function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, "$sql");
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  };
  return $rows;
}
