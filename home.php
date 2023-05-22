<?php
session_start();

if (!isset($_SESSION["email"])) {
  header("Location: index.php");
  exit();
  $_SESSION['email'] = $email;
  $_SESSION['nama'] = $nama;
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Halaman Utama</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="home">
    <div class="box">
      <h1>Selamat datang, <?php echo $_SESSION["name"]; ?></h1>
      <p>Email : <?php echo $_SESSION['email']; ?></p>
      <a href="logout.php">Logout</a>
    </div>
  </div>

  <!-- javascript -->
</body>

</html>