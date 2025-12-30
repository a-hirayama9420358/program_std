<?php require '../header.php'; ?>
<P>お名前を入力してください</P>
<!-- action:入力データの送り先 -->
<form action='user-output.php' method="post">
    <input type="text" name = "user">
    <input type = "submit" value = "確定">
</form>

