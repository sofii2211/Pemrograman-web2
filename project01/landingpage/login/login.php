<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <?php
if (isset($_POST['submit'])) {
  require_once '../../dbkoneksi.php';
  $user = $dbh->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
  $user->execute([
      $_POST ['email'], $_POST ['password']
  ]);

  $count = $user->rowCount(); //untuk memastikan apakah user tersedia apa tidak 

  if($count > 0) { //jika berhasil
      session_start();

      $_SESSION['user'] = $user->fetch();
      header("location:../../index.php");
  } else { //jika gagal
      header("location:../index.html");
  }
}
  ?>
</head>

<body>
  <div class="login-container">
    <h1>Login</h1>
    <form action="login.php" method="POST">
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" name="submit">Login</button>
    </form>
  </div>
</body>