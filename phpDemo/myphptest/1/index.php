<?php
echo 'Hello World';

echo '<br\>';

echo date_default_timezone_get();
date_default_timezone_set('PRC');
echo date('Y-m-d H:i:s');