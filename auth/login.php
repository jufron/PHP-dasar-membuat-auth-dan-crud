<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="auth.css">
  <title>Login</title>
</head>
<body>
  <!-- filename = login.php -->
  <?php 
    // cek dulu kalau session auth ada maka langsung masuk tidak perlu login lagi
    require_once '../middleware/guestMiddleware.php';

    // ambil koneksi datavase
    require_once '../db/koneksi.php';

    if (isset($_POST['submit'])) {

      $email      = $_POST['email'];
      $passowrd   = $_POST['password'];

      $query = "SELECT * FROM user WHERE email = '$email'";
      $result = mysqli_query($konek, $query);

      // nilai result harus true
      if (mysqli_num_rows($result) >= 1) {
        $row = mysqli_fetch_assoc($result);
        // jika password sama yang dari input dan dari database
        if (password_verify($passowrd, $row['password'])) {
          // buat session
          session_start();
          $_SESSION['username'] = $username;

          // alihkan ke halaman jika berhasil login
          header("Location: ../index.php"); 
          exit();
        } else {
          echo '<h1>Kata Sandi salah</h1>';
        }
      } else {
        echo '<h1>Email Tidak Ditemukan</h1>';
      }
    }
    mysqli_close($konek);
  ?>

  <div class="container">
    <h1>Login</h1>
    <form action="" method="post">
      <label for="email">Email</label>
      <input required type="text" id="email" name="email">
      <label for="password">Password</label>
      <input required type="password" id="password" name="password">
      <a href="register.php">Daftar</a>
      <button name="submit" type="submit">Login</button>
    </form>
  </div>
</body>
</html>