<?php require '../header.php'; ?>
<?php
$furigana = mb_convert_kana($_REQUEST['furigana'], 'KVC');
echo "フリガナは「 $furigana 」ですね";
?>
<?php require '../footer.php'; ?>