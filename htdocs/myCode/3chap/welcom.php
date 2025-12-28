<?php
print 'welcome';

echo <<<End
welcome
to
php
End;
?>

<!-- 改行する -->
<?php
print 'welcome<br>';

echo nl2br(<<<'End'
welcome
to
php
End
);
?>


<!-- echoタグ -->
<?= 'いらっしゃい！'?>