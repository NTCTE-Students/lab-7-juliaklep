<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_GET['add_item'])) {
    $item_id = $_GET['add_item'];

    $item_name = "Товар #" . $item_id;
    $item_price = rand(10, 100);   

    if (isset($_SESSION['cart'][$item_id])) {
        $_SESSION['cart'][$item_id]['quantity']++;
    } else {

        $_SESSION['cart'][$item_id] = array(
            'name' => $item_name,
            'price' => $item_price,
            'quantity' => 1
        );
    }

    header("Location: cart.php");
    exit();
}

if (isset($_GET['remove_item'])) {
    $item_id = $_GET['remove_item'];
    unset($_SESSION['cart'][$item_id]);  
    header("Location: cart.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Корзина</title>
</head>
<body>

<h2>Содержимое корзины</h2>

<?php if (empty($_SESSION['cart'])): ?>
    <p>Ваша корзина пуста.</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Товар</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Сумма</th>
                <th>Действие</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total_sum = 0;
            foreach ($_SESSION['cart'] as $item_id => $item):
                $sum = $item['price'] * $item['quantity'];
                $total_sum += $sum;
            ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['name']); ?></td>
                    <td><?php echo htmlspecialchars($item['price']); ?></td>
                    <td><?php echo htmlspecialchars($item['quantity']); ?></td>
                    <td><?php echo htmlspecialchars($sum); ?></td>
                    <td><a href="cart.php?remove_item=<?php echo $item_id; ?>">Удалить</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Итого:</td>
                <td><?php echo htmlspecialchars($total_sum); ?></td>
                <td></td>
            </tr>
        </tfoot>
    </table>
<?php endif; ?>

<br>

<a href="cart.php?add_item=1">Добавить товар #1</a><br>
<a href="cart.php?add_item=2">Добавить товар #2</a><br>
<a href="cart.php?add_item=3">Добавить товар #3</a><br>

<p><em>Для добавления и удаления товаров, обновите страницу. В реальном приложении, это нужно делать с помощью отдельных форм или AJAX.</em></p>

</body>
</html>