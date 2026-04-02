<?php require '../header.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff','password');

$sql=$pdo->prepare('insert into product values(null, ?, ?)');
if (empty($_REQUEST['name'])){
    echo '商品名を入力して下さい';
} else if(!preg_match('/^[0-9]+$/', $_REQUEST['price'])){
        echo '価格を整数にして';
    } else if ($sql->execute(
        [htmlspecialchars($_REQUEST['name']), $_REQUEST['price']]
    )){
        echo '追加に成功しました';
    } else {
        echo '追加に失敗しました';
    }
?>

<?php require '../footer.php'; ?>
