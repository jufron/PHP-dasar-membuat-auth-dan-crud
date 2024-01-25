<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Blog</title>
</head>
<body>
  <?php 
    require_once '../db/koneksi.php';

    if (isset($_POST['submit'])) {
    
        $judul              = $_POST['judul'];
        $content            = $_POST['content'];
        $tanggal_perbaharui = date("Y-m-d");
        $tanggal_buat       = date("Y-m-d");

        $sql = "INSERT INTO blog VALUES (null, '$judul', '$content', '$tanggal_perbaharui', '$tanggal_buat') ";

        mysqli_query($konek, $sql);
        header("Location:blog.php");
    }
  ?>
  <h1>Tambah Blog Baru</h1>
  <form action="#" method="post">
    <label for="judul">Judul</label>
    <input type="text" id="judul" name="judul">
    <label for="content">Content</label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea>

    <button type="submit" name="submit">Simpan</button>
  </form>
</body>
</html>