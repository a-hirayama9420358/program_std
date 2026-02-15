<?php require '../header.php'; ?>
<p>７ケタの郵便番号をハイフンなしで入力して</p>
<form action= 'postcode-output.php' method= 'post'>
    <input type= 'text' name= 'postcode'>
    <input type= 'submit' value= '提出'>
</form>

<?php require '../footer.php'; ?>