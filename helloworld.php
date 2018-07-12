
<?php
header("content-type:text/html;charset=utf-8");  //设置编码
$url="http://rmrb.applinzi.com/rmrb-1.php";
echo readfile($url);
?>