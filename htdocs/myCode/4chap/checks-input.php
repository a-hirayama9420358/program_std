<?php require '../header.php'; ?>
<p>興味のあるジャンルを全て選択してください</p>
<form action = 'checks-output.php' method = 'post'>
    <?php
    $genre = ['カメラ','パソコン','時計','家電','書籍','文房具','食品'];
    foreach($genre as $item){
        echo '<p><input type="checkbox" name="select_genre[]" value= "', $item, '">', $item, '</p>';
    }
    ?>
    <p><input type = 'submit' value = '確定'></p>

</form>
<?php require '../footer.php'; ?>

<!-- これでも動く
echo '<p>';
echo '<input type = "checkbox" name= "genre[]" value= "', $item, '">';
echo $item;
echo '</P>'; -->