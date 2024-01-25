<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'sekolah';

$konek = mysqli_connect($server, $username, $password, $database);

if (!$konek) {
  echo 'gagal connect' . mysqli_connect_error();
} 
// else {
//   echo 'berhasil connect ke database';
// }
