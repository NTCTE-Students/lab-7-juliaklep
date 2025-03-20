<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Куки</title>
</head>
<body>
    <h1>Куки</h1>

    <form action="" method="post">
        <label for="cookie_value">Выберите тему:</label>
        <select id="cookie_value" name="cookie_value" required>
            <option value="Light">Light</option>
            <option value="Dark">Dark</option>
        </select>
        <br><br>
        <input type="submit" value="Отправить">
    </form>

    <?php

    $cookie_name = 'Theme';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['cookie_value'])) {
            $cookie_value = $_POST['cookie_value']; 
            $time = 7200; 

            setcookie($cookie_name, $cookie_value, time() + $time, '/');


            header('Location: ' . $_SERVER['PHP_SELF']);
            exit();
        }
    }


    if (isset($_COOKIE[$cookie_name])) {
        print("Куки '{$cookie_name}' установлены!<br>");
        print('Значение: ' . $_COOKIE[$cookie_name] . '<br>');
    } else {
        print("Куки '{$cookie_name}' не установлены!");
    }
    ?>
</body>
</html>