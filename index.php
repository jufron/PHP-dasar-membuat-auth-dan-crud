<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sekolah</title>
</head>
<body>
  <?php     
    // cek dulu kalau session auth ada maka diijinkan masuk
    require_once 'middleware/authMiddleware.php';

  ?>
  <a href="auth/logout.php">Logout</a>
  <h1>Sekolah</h1>
  <ul>
    <li><a href="siswa/siswa.php">Daftar Siswa</a></li>
    <li><a href="mata_pelajaran/mata_pelajaran.php">Daftar mata pelajaran</a></li>
    <li><a href="blog/blog.php">Daftar blog</a></li>
  </ul>

  <?php require_once 'db/koneksi.php'; ?>
</body>
</html>