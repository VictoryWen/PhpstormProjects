<?php
/**
 * Created by PhpStorm.
 * User: xuwen
 * Date: 2017/3/18
 * Time: 16:28
 */

echo 'Hello World';

if (isset($_GET['name'])) {
    echo 'Hello'.$_GET['name'];
}else{
    echo '请输入名字';
}


