<?php 

require_once '../db/koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM siswa WHERE id =$id";  

$hasil = mysqli_query($konek, $sql);

header('location:siswa.php');