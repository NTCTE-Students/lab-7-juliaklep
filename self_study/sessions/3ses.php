<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  header("Location: login.php");
  exit();
}


$username = $_SESSION['username'];


if (isset($_GET['logout'])) {
  session_unset();

  session_destroy();

  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Страница приветствия</title>
</head>
<body>

  <h2>Добро пожаловать, <?php echo htmlspecialchars($username); ?>!</h2>

  <p>Вы успешно вошли в систему.</p>

  <a href="welcome.php?logout=true">Выйти</a>

</body>
</html>

