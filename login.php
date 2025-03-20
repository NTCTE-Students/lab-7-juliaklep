<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получение имени пользователя из формы
    $username = $_POST['username'];

    // Установка переменной сессии
    $_SESSION['username'] = $username;

    // Перенаправление на страницу приветствия
    header('Location: welcome.php');
    exit();
}

?>

<!DOCTYPE html>
<html>
	<body>
		<h2>Форма входа</h2>
		<form method="post" action="login.php">
			Имя пользователя: <input type="text" name="username" required><br><br>
			<input type="submit" value="Войти">
		</form>
	</body>
</html>