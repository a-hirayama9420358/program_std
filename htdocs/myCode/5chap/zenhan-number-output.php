<?php require '../header.php'; ?>
<?php
$count = mb_convert_kana($_REQUEST['count'], 'n');
if (preg_match('/^[0-9s]+$/', $count)){
    echo $count, '個を購入しますね';
}else{
    echo $count, 'は数値じゃないよね。ちゃんと数値で入力しよう';
}
?>
<?php require '../footer.php'; ?>