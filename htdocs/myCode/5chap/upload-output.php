<?php require '../header.php'; ?>
<?php
if (is_uploaded_file($_FILES['file']['tmp_name'])){
    if (!file_exists('upload')){
        mkdir('upload');
    }
    $file= 'upload/'.basename($_FILES['file']['name']);
    if (move_uploaded_file($_FILES['file']['tmp_name'], $file)){
        echo $file, 'のアップロードに成功しました';
        echo '<p><image alt ="image" src="', $file, '"></p>';
    }else {
        echo 'ファイルのアップロードに失敗しました';
    }
}else {
    echo 'ファイルを選択してください';
}

echo "<p>",$_FILES['file']['tmp_name'],"</p>";
echo $_FILES['file']['name'];

?>
<?php require '../footer.php'; ?>
