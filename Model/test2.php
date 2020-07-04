<?php
$_POST['arr'];
for ($i=0;$i<sizeof($_POST['arr']);$i++){
    $num= $_POST['arr'][$i];
    $str = "<div class='td'>$num</div>";
    echo $str;
}



?>