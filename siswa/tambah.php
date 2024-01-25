<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Siswa Baru</title>
</head>
<body>
  <?php 
    // cek dulu kalau session auth ada maka diijinkan masuk
    require_once '../middleware/authMiddleware.php';
  
    require_once '../db/koneksi.php';

    if (isset($_POST['submit'])) {
    
        $nama_lengkap   = $_POST['nama_lengkap'];
        $jenis_kelamin  = $_POST['jenis_kelamin'];
        $agama          = $_POST['agama'];
        $alamat         = $_POST['alamat'];

        $sql = "INSERT INTO siswa VALUES (null, '$nama_lengkap', '$jenis_kelamin', '$agama', '$alamat') ";

        mysqli_query($konek, $sql);
        header("Location:siswa.php");
    }
  ?>

  <h1>Tambah Siswa Baru</h1>
  <form action="#" method="post">
    <label for="nama_lengkap">Nama lengkap</label>
    <input type="text" id="nama_lengkap" name="nama_lengkap">
    
    <label for="jenis_kelamin">jenis kelamin</label>
    <input type="text" id="jenis_kelamin" name="jenis_kelamin">

    <label for="agama">agama</label>
    <input type="text" id="agama" name="agama">
    
    <label for="alamat">alamat</label>
    <input type="text" id="alamat" name="alamat">

    <button type="submit" name="submit">Simpan</button>
  </form>
</body>
</html>