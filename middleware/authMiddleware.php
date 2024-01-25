<?php

// filename = authMiddleware.php

session_start();
// jika user belum login maka arahkan ke halaman berikut
if (!isset($_SESSION['username'])) {
  // halaman login
  header("Location: /sekolah/auth/login.php");
  exit();
}

