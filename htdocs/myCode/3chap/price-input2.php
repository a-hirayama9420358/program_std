<?php require '../header.php'; ?>
<form action="price-output2.php" method="post">
    単価 <input type="text" name="price"> 円
    ✖️
    単価 <input type="text" name="count"> 個
    <br>
    <br>
    <input type="submit" value = "計算">
</form>
<?php require '../footer.php'; ?>