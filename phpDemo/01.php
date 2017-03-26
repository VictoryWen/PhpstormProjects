<?php
/**
 * Created by PhpStorm.
 * User: xuwen
 * Date: 2017/2/25
 * Time: 20:19
 */

echo 'hello world <br \>';

function Test() {

    echo '我是一个测试函数';
}

Test();

$ref_fun = new ReflectionFunction(('Test'));
echo $ref_fun->getDocComment();

echo '定义在文件：'.$ref_fun->getFileName();

