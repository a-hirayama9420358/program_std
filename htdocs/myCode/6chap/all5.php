<?php require '../header.php'; ?>
<table>
    <tr>
        <th>商品番号</th>
        <th>商品名</th>
        <th>価格</th>
    </tr>


<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 'staff', 'password');

foreach ($pdo->query('SELECT * FROM product') as $row) {

    $id    = htmlspecialchars($row['id']);
    $name  = htmlspecialchars($row['name']);
    $price = htmlspecialchars($row['price']);

    echo "<tr>
            <td>$id</td>
            <td>$name</td>
            <td>$price</td>
          </tr>";
}
?>
</table>
<?php require '../footer.php'; ?>
