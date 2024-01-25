<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="auth.css">
  <title>Registrer</title>
</head>
<body>
  <!-- filename = register.php -->
  <?php

    // cek dulu kalau session auth ada maka langsung masuk tidak perlu login lagi
    require_once '../middleware/guestMiddleware.php';

    // ambil koneksi database
    require_once '../db/koneksi.php';

    // cek jika tombol Daftar di tekan maka lakukan ini
    if (isset($_POST['submit'])) {

      // ambil seluruh data dari inputan
      $username     = $_POST['username'];
      $email        = $_POST['email'];
      $password     = $_POST['password'];

      // Enkripsi password
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      // Query database untuk menambahkan pengguna baru
      $query = "INSERT INTO user (
            username, email, password
          )
          VALUES (
            '$username', 
            '$email',
            '$hashed_password'
          )";

      $result = mysqli_query($konek, $query);

      if ($result) {
            header('location:login.php');
          } else {
        echo "
          <script>
            alert('Pendaftaran Gagal');
          </script>";
      }
    }

    // Tutup koneksi database
    mysqli_close($konek);

  ?>
  <div class="container">
    <h1>Registrasi</h1>
  
    <form action="#" method="post">
      <label for="username">Username</label>
      <input required type="text" id="username" name="username">
      <label for="email">Email</label>
      <input required type="text" id="email" name="email">
      <label for="password">Password</label>
      <input required type="password" id="password" name="password">
      <a href="login.php">Login</a>
      <button name="submit" type="submit">Registrasi</button>
    </form>
  </div>

</body>
</html>