<?php

session_start();

// Удаление всех переменных сессии
session_unset();

// Завершение сессии
session_destroy();

// Перенаправление на страницу входа
header('Location: login.php');
exit();