<?php require '../header.php'; ?>
お食事を選択してください
<!-- actionはフォームから送られたデータを受け取って実行するスクリプト -->
<form action = "radio-output.php" method = "post">

    <!-- checkedが初期選択になる チェックされるとvalueを取得する-->
    <P><label><input type = "radio" name = "meal" value = "和食" checked>和食だよ</label></P>
    <P><label><input type = "radio" name = "meal" value = "洋食" >洋食</label></P>
    <P><label><input type = "radio" name = "meal" value = "中華" >中華</label></P>
    <P><label><input type = "radio" name = "meal" value = "イタリアン" >イタリアン</label></P>
    <P><label><input type = "submit" value = "確定するよ"></label></P>
</form>
<?php require '../footer.php'; ?>