<?php require '../header.php'; ?>
<p>パスワード入力してね</p>
<p>８文字以上で、英小文字、英大文字、数字を各１文字以上含むこと</p>
<form action = 'password-output.php' method = 'post'>
    <input type= 'password' name= 'password'>
    <input type= 'submit' value = '確定だよ'>
</form>
<?php require '../footer.php'; ?>