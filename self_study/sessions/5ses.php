<?php
session_start();


if (!isset($_SESSION['first_visit_time'])) {
  $_SESSION['first_visit_time'] = date("Y-m-d H:i:s"); 
}

$_SESSION['last_visit_time'] = date("Y-m-d H:i:s");

?>

<!DOCTYPE html>
<html>
<head>
  <title>Время посещений</title>
</head>
<body>

  <h2>Информация о посещениях</h2>

  <?php
  echo "<p>Время первого посещения: " . htmlspecialchars($_SESSION['first_visit_time']) . "</p>";
  echo "<p>Время последнего посещения: " . htmlspecialchars($_SESSION['last_visit_time']) . "</p>";
  ?>

</body>
</html>

