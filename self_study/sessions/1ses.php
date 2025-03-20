<?php


session_start();

// 2. Установка переменной сессии username
$_SESSION['username'] = 'student';

// 3. Проверка наличия переменной сессии и вывод ее значения
if (isset($_SESSION['username'])) {
  echo "Переменная сессии 'username' установлена. Ее значение: " . $_SESSION['username'];
} else {
  echo "Переменная сессии 'username' не установлена.";
}

?>

