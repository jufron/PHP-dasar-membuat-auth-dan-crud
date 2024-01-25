<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Mata Pelajaran Baru</title>
</head>
<body>
  <?php 
    require_once '../db/koneksi.php';

    if (isset($_POST['submit'])) {
    
        $mata_pelajaran   = $_POST['nama_mata_pelajaran'];
        $kelas            = $_POST['kelas'];
        // $mata_pelajaran   = $_POST['nama_mata_pelajaran'];
        // $kelas            = $_POST['kelas'];

        $sql = "INSERT INTO mata_pelajaran VALUES (null, '$mata_pelajaran', '$kelas') ";

        mysqli_query($konek, $sql);
        header("Location:mata_pelajaran.php");
    }
  ?>
  <h1>Tambah Mata Pelajaran Baru</h1>
  <form action="#" method="post">
    <label for="nama_mata_pelajaran">mata pelajaran</label>
    <input type="text" id="nama_mata_pelajaran" name="nama_mata_pelajaran">
    
    <label for="kelas">kelas</label>
    <input type="text" id="kelas" name="kelas">

    <button type="submit" name="submit">Simpan</button>
  </form>
</body>
</html>