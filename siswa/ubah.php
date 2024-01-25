<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Siswa</title>
</head>
<body>
  <?php 
    // cek dulu kalau session auth ada maka diijinkan masuk
    require_once '../middleware/authMiddleware.php';
  
    require_once '../db/koneksi.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM siswa WHERE id=$id";
    $result = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($result);
    
    if (isset($_POST['submit'])) {
    
        $nama_lengkap   = $_POST['nama_lengkap'];
        $jenis_kelamin  = $_POST['jenis_kelamin'];
        $agama          = $_POST['agama'];
        $alamat         = $_POST['alamat'];

        $sql = "UPDATE siswa SET 
                nama_lengkap    = '$nama_lengkap',
                jenis_kelamin   = '$jenis_kelamin',
                agama           = '$agama',
                alamat          = '$alamat'
                WHERE id=$id";

        mysqli_query($konek, $sql);
        header("Location:siswa.php");
    }
  ?>
  <h1>Ubah Siswa</h1>
  <form action="#" method="post">
    <label for="nama_lengkap">Nama lengkap</label>
    <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?php echo $data['nama_lengkap'] ?>">
    
    <label for="jenis_kelamin">jenis kelamin</label>
    <input type="text" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>">

    <label for="agama">agama</label>
    <input type="text" id="agama" name="agama" value="<?php echo $data['agama'] ?>">
    
    <label for="alamat">alamat</label>
    <input type="text" id="alamat" name="alamat" value="<?php echo $data['alamat'] ?>">

    <button type="submit" name="submit">Simpan</button>
  </form>
</body>
</html>