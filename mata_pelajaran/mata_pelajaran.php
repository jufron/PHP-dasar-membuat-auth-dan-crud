<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Mata Pelajaran</title>
</head>
<body>
  <?php 
  require_once '../db/koneksi.php';
  $sql = 'SELECT * FROM mata_pelajaran';  
  $hasil = mysqli_query($konek, $sql);
  ?>

  <h1>Daftar Mata Pelajaran</h1>

  <a class="button blue" href="tambah.php">Tambah</a>
  
  <table>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Kelas</th>
      <th>Aksi</th>
    </tr>
    <?php $nomor = 1 ?>
    <?php  foreach($hasil as $h) {  ?>
    <tr>
      <td><?= $nomor++ ?></td>
      <td><?= $h['nama_mata_pelajaran'] ?></td>
      <td><?= $h['kelas'] ?></td>
      <td>
        <a class="button orange small" href="">Ubah</a>
        <a class="button red small" href="">Hapus</a>
      </td>
    </tr>
    <?php } ?>
  </table>

</body>
</html>