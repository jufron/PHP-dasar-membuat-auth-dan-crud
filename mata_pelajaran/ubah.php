<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ubah Mata Pelajaran </title>
</head>
<body>
  <?php 
    require_once '../db/koneksi.php';

    
      $id = $_GET['id'];
      $sql = "SELECT * FROM mata_pelajaran WHERE id=$id";
      $result = mysqli_query($konek, $sql);
      $data = mysqli_fetch_array($result);
      
    if (isset($_POST['submit'])) {
    
        $mata_pelajaran   = $_POST['nama_mata_pelajaran'];
        $kelas            = $_POST['kelas'];
  
      
        $sql = "UPDATE mata_pelajaran SET 
                nama_mata_pelajaran    = '$mata_pelajaran',
                kelas   = '$kelas'
                WHERE id=$id";

        mysqli_query($konek, $sql);
        header("Location:mata_pelajaran.php");
    }
  ?>
  <h1>Tambah Mata Pelajaran Baru</h1>
  <form action="#" method="post">
    <label for="nama_mata_pelajaran">mata pelajaran</label>
    <input type="text" id="nama_mata_pelajaran" name="nama_mata_pelajaran" value="<?php echo $data['mata_pelajaran'] ?>">
    
    <label for="kelas">kelas</label>
    <input type="text" id="kelas" name="kelas" value="<?php echo $data['kelas'] ?>">

    <button type="submit" name="submit">Simpan</button>
  </form>
</body>
</html>