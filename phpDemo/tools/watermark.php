<?php
/**
 * Created by PhpStorm.
 * User: xuwen
 * Date: 2017/3/18
 * Time: 16:11
 */


$img = imagecreatefromjpeg('WechatIMG1.jpeg');

header('Content-type: image/png');
imagepng($img);