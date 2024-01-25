<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Siswa</title>
</head>
<body>
  <?php 
  // cek dulu kalau session auth ada maka diijinkan masuk
  require_once '../middleware/authMiddleware.php';
  
  require_once '../db/koneksi.php';
  $sql = 'SELECT * FROM siswa';  
  $hasil = mysqli_query($konek, $sql);
  ?>

  <h1>Daftar Siswa</h1>

  <a class="button blue" href="tambah.php">Tambah</a>
  
  <table>
    <tr>
      <td>No</td>
      <td>Nama Lengkap</td>
      <td>Jenis Kelamin</td>
      <td>agama</td>
      <td>alamat</td> 
      <td>aksi</td> 
    </tr>
    <?php $nomor = 1 ?>
    <?php  foreach($hasil as $h) {  ?>
    <tr>
      <td><?= $nomor++ ?></td>
      <td> <?php echo $h['nama_lengkap'] ?>  </td>
      <td> <?php echo $h['jenis_kelamin'] ?>  </td>
      <td> <?php echo $h['agama'] ?>  </td>
      <td> <?php echo substr($h['alamat'], 0, 30)  ?>  </td>
      <td>
        <a class="button orange small" href="ubah.php?id=<?php echo $h['id'] ?>">Ubah</a>
        <a class="button red small" href="hapus.php?id=<?php echo $h['id']?>">Hapus</a>
      </td>
    </tr>
    <?php } ?>
  </table>

</body>
</html>