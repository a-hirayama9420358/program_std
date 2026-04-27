<?php require '../header.php'; ?>
<div class="th0">商品番号</div>
<div class="th1">商品名</div>
<div class="th1">価格</div><br>

<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff','password');

if(isset($_REQUEST['command'])){
    switch($_REQUEST['command']){
        case 'insert':
            if(empty($_REQUEST['name']) || !preg_match('/^[0-9]+$/',$_REQUEST['price'])) break; //商品名がからまたは価格が数値でなかったらbreak
            $sql=$pdo->prepare('insert into product value(null,?,?)');
            $sql->execute([htmlspecialchars($_REQUEST['name']), $_REQUEST['price']]);
            break;
        case 'update':
            if(empty($_REQUEST['name']) || !preg_match('/^[0-9]+$/',$_REQUEST['price'])) break; //商品名がからまたは価格が数値でなかったらbreak
            $sql=$pdo->prepare('update product set name=?, price=? where id=?');
            $sql->execute([htmlspecialchars($_REQUEST['name']), $_REQUEST['price'], $_REQUEST['id']]);
            break;
        case 'delete':
            $sql=$pdo->prepare('delete from product where id=?');
            $sql->execute([$_REQUEST['id']]);
            break;
    }
}

foreach($pdo->query('select * from product') as $row){
    echo '<form class="ib" action="edit3.php" method="post">';
    echo '<input type="hidden" name="command" value="update">';
    echo '<input type="hidden" name="id" value="', $row['id'], '">';
    echo '<div class="td0">';
    echo $row['id'];
    echo '</div>';
    echo '<div class="td1">';
    echo '<input type="text" name="name" value="', $row['name'], '">';
    echo '</div>';
    echo '<div class="td1">';
    echo '<input type="text" name="price" value="', $row['price'], '">';
    echo '</div>';
    echo '<div class="td2">';
    echo '<input type="submit" value="更新">';
    echo '</div>';
    echo '</form>     ';//ここにスペースを入れると更新と削除ボタンの間に半角スペースが入る。スペースを何個入れても半角スペース一個分
    echo '<form class="ib" action="edit3.php" method="post">';
    echo '<input type="hidden" name="command" value="delete">';
    echo '<input type="hidden" name="id" value="', $row['id'],'">';
    echo '<input type="submit" value="削除">';
    echo '</form><br>';
    echo "\n";
}
?>

<form action="edit3.php" method="post">
    <input type="hidden" name="command" value="insert">
    <div class="td0"></div>
    <div class="td1"><input type="text" name="name"></div>
    <div class="td1"><input type="text" name="price"></div>
    <div class="td2"><input type="submit" value="追加"></div>
</form><br>
<?php require '../footer.php'; ?>