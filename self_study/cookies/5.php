<?php
$cookie_name = 'language';
$cookie_value = 'English';
$time = 7200; 

setcookie($cookie_name, $cookie_value, time() + $time, '/');

$visit_cookie_name = 'visit_count';

if (!isset($_COOKIE[$visit_cookie_name])) {
    $visit_count = 1;
    setcookie($visit_cookie_name, $visit_count, time() + $time, '/');
    print("Куки '{$visit_cookie_name}' не установлены!<br>");
} else {
    $visit_count = $_COOKIE[$visit_cookie_name] + 1;
    setcookie($visit_cookie_name, $visit_count, time() + $time, '/');
    print("Куки '{$visit_cookie_name}' установлены!<br>");
    print('Значение счетчика: ' . $visit_count . "<br>");
}

if (isset($_COOKIE[$cookie_name])) {
    print("Куки '{$cookie_name}' установлены!<br>");
    print('Значение языка: ' . $_COOKIE[$cookie_name] . "<br>");
} else {
    print("Куки '{$cookie_name}' не установлены!<br>");
}
?>