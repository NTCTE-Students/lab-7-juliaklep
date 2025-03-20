<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];


  
  if ($username == "demo" && $password == "password") {
    $_SESSION['username'] = $username;
    $_SESSION['logged_in'] = true; 

    header("Location: welcome.php"); 
    exit(); 
  } else {
    $error_message = "Неверное имя пользователя или пароль.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Форма авторизации</title>
</head>
<body>

  <h2>Авторизация</h2>

  <?php if (isset($error_message)): ?>
    <p style="color: red;"><?php echo $error_message; ?></p>
  <?php endif; ?>

  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Имя пользователя: <input type="text" name="username"><br><br>
    Пароль: <input type="password" name="password"><br><br>
    <input type="submit" value="Войти">
  </form>

</body>
</html>