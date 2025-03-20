<?php

session_start();

if (!isset($_SESSION['username'])) {
    // Если пользователь не авторизован, перенаправление на страницу входа
    header('Location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html>
	<body>
		<h2>Добро пожаловать!</h2>
		<p>Привет, <?php print($_SESSION['username']); ?>!</p>
		<a href="logout.php">Выйти</a>
	</body>
</html>