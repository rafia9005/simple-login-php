# simple-login-php


### cara pemasangan 
buat data base sesuai nama yang kalian mau contoh (login)
maka di bagian data base di ubah sesuai nama data base kalian
contoh: 

```php
  <?php
$host = "localhost";
$username = "root";
$password = "";
$database = "nama database"; //ini tempat menaruh nama database kalian

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
 ```
 
 ### import sql ini ke database kalian
 ```sql
 SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;


 ```
 
 
 ### lalu jalankan web nya, dan coab register, maka <h1>BOOOM!!!</h1> berhasil!!!
