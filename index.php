<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row["password"])) {
      session_start();
      $_SESSION["name"] = $row["name"];
      $_SESSION["email"] = $row["email"];

      header("Location: home.php");
      exit();
    } else {
      echo "Password salah";
    }
  } else {
    echo "Email tidak terdaftar";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <div class="box">
      <h1>Login</h1>
      <form method="POST">
        <label>Email:</label>
        <br>
        <input type="email" name="email" required placeholder="name@gmail.com">
        <br>
        <label>Password:</label>
        <br>
        <input type="password" name="password" required placeholder="Password">
        <br>
        <div class="btn">
          <input type="submit" value="Login">
        </div>
      </form>
      <p>Buat akun sekarang? <a href="register.php">Buat Akun!!</a></p>
    </div>
</main>
</body>

</html>