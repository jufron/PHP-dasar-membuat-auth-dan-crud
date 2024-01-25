<?php

// filename = guestMiddleware.php

session_start();
// jika user sudah login maka arahkan ke halaman berikut
if (isset($_SESSION['username'])) {
  // ke halaman index.php
    header("Location: /sekolah");
    exit();
}
