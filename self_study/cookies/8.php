<?php

$cookie_name1 = '1cookie';
$cookie_name2 = '2cookie';
$cookie_value1 = 'font_size';
$cookie_value2 = 'layout';
$time = 7200;

setcookie($cookie_name1, $cookie_value1, time() + ($time), '/'); // 3600 секунд = 1 час
setcookie($cookie_name2, $cookie_value2, time() + ($time), '/'); // 3600 секунд = 1 час


?>
<!DOCTYPE html>
<html>
	<body>
		<?php
			if (!isset($_COOKIE[$cookie_name1])) {
			    print("Куки '{$cookie_name1}' не установлены!<br>");
			} else {
			    print("Куки '{$cookie_name1}' установлены!<br>");
				print('Значение: ' . $_COOKIE[$cookie_name1] . '<br>');
			}
            if (!isset($_COOKIE[$cookie_name2])) {
                print("Куки '{$cookie_name2}' не установлены!<br>");
			} else {
                print("Куки '{$cookie_name2}' установлены!<br>");
                print('Значение: ' . $_COOKIE[$cookie_name2] . '<br>');
			}
		?>
	</body>
</html>