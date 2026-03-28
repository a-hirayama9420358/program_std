<?php require '../header.php'; ?>
<table>
    <tr>
        <th>商品番号</th>
        <th>商品名</th>
        <th>価格</th>
    </tr>


<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 'staff', 'password');

foreach($pdo->query('select * from product') as $row){

echo "<tr><td>$row[id]</td>
    <td>$row[name]:</td>
    <td>$row[price]</td>
    </tr>";
}
?>
</table>
<?php require '../footer.php'; ?>
