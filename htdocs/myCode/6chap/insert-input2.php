<?php require '../header.php'; ?>
商品名を入力して下さい

<form action='insert-output2.php' method='post'>
    商品名<input type='text' name='name'> <br>
    価　格<input type='text' name='price'> <br>
    <input type='submit' value='追加します'>
</form>

<?php require '../footer.php'; ?>
