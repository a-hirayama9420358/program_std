<?php require '../header.php'; ?>
<p>購入数量を選択してね</p>

<form action = "select-for-output.php" method = "post">
    <select name = "count">
        <?php
        for ($i = 0; $i<= 10; $i++) {
        echo "<option value = '",$i, "'>" ,$i, "</option>";
        }
        ?>
    </select>
    <p><input type = "submit" value = "決定"></p>
</form>
<?php require '../footer.php'; ?>