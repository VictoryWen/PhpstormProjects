<?php
/**
 * Created by PhpStorm.
 * User: xuwen
 * Date: 2017/3/26
 * Time: 10:00
 */

try{
    $pdo = new PDO("mysql:host=localhost; dbname=myapp", "root", "");
    //$pdo = new PDO("uri:mysqlPdo.ini", "root", "");
    //$pdo = new PDO("mysqlpdo", "root", "");
}catch (PDOException $e){
    die("数据库连接失败".$e->getMessage());
}
    echo $pdo->getAttribute(PDO::ATTR_CLIENT_VERSION);

print_r($pdo);