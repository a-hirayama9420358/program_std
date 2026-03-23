<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<?php require '../header.php'; ?>

<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 'staff', 'password');

foreach($pdo->query('select * from product') as $row){
echo '<p>';
echo $row['id'], ':';
echo $row['name'], ':';
echo $row['price'], ':';
echo '</p>';
}
?>

<?php require '../footer.php'; ?>
