<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Blog</title>
</head>
<body>
  <?php 
  require_once '../db/koneksi.php';
  $sql = 'SELECT * FROM blog';  
  $hasil = mysqli_query($konek, $sql);
  ?>

  <h1>Daftar Blog</h1>

  <a class="button blue" href="tambah.php">Tambah</a>

  <table>
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Content</th>
      <th>Terakhir dibuat</th>
      <th>Terakhir diperbaharui</th>
      <th>Aksi</th>
    </tr>
    <?php $nomor = 1 ?>
    <?php  foreach($hasil as $h) {  ?>
    <tr>
      <td><?= $nomor++ ?></td>
      <td><?= $h['judul'] ?></td>
      <td><?= substr($h['content'], 0, 30) ?></td>
      <td><?= $h['terakhir_dibuat'] ?></td>
      <td><?= $h['terakhir_diperbaharui'] ?></td>
      <td>
        <a class="button orange small" href="">Ubah</a>
        <a class="button red small" href="">Hapus</a>
      </td>
    </tr>
    <?php } ?>
  </table>

</body>
</html>

