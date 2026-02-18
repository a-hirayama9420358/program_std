<?php require '../header.php'; ?>
<?php
$postcode = $_REQUEST['postcode'];

if (preg_match('/^[0-9]{3}-[0-9]{4}$/', $postcode)){
    echo '郵便番号', $postcode, 'を確認しました';
}else{
    echo $postcode, 'は有効な郵便番号じゃないよ';
}
?>
<?php require '../footer.php'; ?>