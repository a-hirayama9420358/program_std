<?php require '../header.php'; ?>
<?php
echo 'フリガナは「', mb_convert_kana($_REQUEST['furigana']), '」ですね'
?>
<?php require '../footer.php'; ?>