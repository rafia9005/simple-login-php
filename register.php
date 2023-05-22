<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm_password"];

  $sql = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    echo "Email sudah terdaftar";
  } else {
    if ($password != $confirm_password) {
      echo "Password tidak cocok";
    } else {
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
      mysqli_query($conn, $sql);

      echo "Registrasi berhasil";
    }
  }
}
?>


<!DOCTYPE html>
<html>

<head>
  <title>Register</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <main>
    <div class="box">
      <h1>Register</h1>
      <form method="POST" action="register.php">
        <label>Name:</label>
        <br>
        <input type="text" name="name" required>
        <br>
        <label>Email:</label>
        <br>
        <input type="email" name="email" required>
        <br>
        <label>Password:</label>
        <br>
        <input type="password" name="password" required>
        <br>
        <label>Confirm Password:</label>
        <br>
        <input type="password" name="confirm_password" required>

        <div class="btn">
          <input type="submit" value="Register">
        </div>
      </form>
      <a href="index.php">Login Now</a>
    </div>
  </main>
</body>

</html>