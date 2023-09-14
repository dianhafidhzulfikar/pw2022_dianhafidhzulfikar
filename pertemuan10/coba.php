<?php
$mahasiswa =
  [
    [
      "nama" => "Joni",
      "nim" => "123456",
      "jurusan" => "Sistem Informasi",
      "email" => "joni@gmail.com",
      "gambar" => "gambar1.jpg"
    ],
    [
      "nama" => "Budi",
      "nim" => "321654",
      "jurusan" => "Ilmu Komputer",
      "email" => "budi@gmail.com",
      "gambar" => "gambar2.jpg"
    ],
    [
      "nama" => "Rani",
      "nim" => "7868989",
      "jurusan" => "Manajemen Komputer",
      "email" => "rani@gmail.com",
      "gambar" => "gambar3.jpg"
    ]
  ];

echo $mahasiswa[1]["email"];
