<?php

$cookie_name = 'country';
$cookie_value = 'Russia';
$time = 7200;

setcookie($cookie_name, $cookie_value, time() + ($time), '/'); // 3600 секунд = 1 час

?>
<!DOCTYPE html>
<html>
	<body>
		<?php
			if (!isset($_COOKIE[$cookie_name])) {
			    print("Куки '{$cookie_name}' не установлены!");
			} else {
			    print("Куки '{$cookie_name}' установлены!<br>");
				print('Значение: ' . $_COOKIE[$cookie_name] . '<br>');
                print('hello' ."   ". $cookie_value ."   ". $cookie_name);
			}
		?>
	</body>
</html>