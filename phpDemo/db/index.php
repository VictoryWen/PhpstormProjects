<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>db</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: xuwen
 * Date: 2017/3/18
 * Time: 18:08
 */

$conn = @mysql_connect('localhost', 'root', '');

if ($conn) {
    echo '链接成功';
}else{
    echo '连接失败';
}

?>
</body>
</html>