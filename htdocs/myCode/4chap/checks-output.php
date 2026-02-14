<?php require '../header.php'; ?>
<?php
if( !isset($_REQUEST['select_genre']) || empty($_REQUEST['select_genre'])){
    echo '何も選択されてないよ';
}
else {
    foreach($_REQUEST['select_genre'] as $item){
        echo '<p>', $item, '</p>';
    }
    echo 'に関するお買い得情報を送らせていただきます。';
}
?>
<?php require '../footer.php'; ?>