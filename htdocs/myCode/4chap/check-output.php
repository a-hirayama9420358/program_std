<?php require '../header.php'; ?>
<?php
if(isset($_REQUEST['mail'])) {
    echo 'お買い得情報のメールを送信させていただきます';
} else {
    echo 'お買い得情報のメールは送信いたしません';
}
?>


<?php require '../footer.php'; ?>