<?php 

$dir = opendir('D:\wamp64\www\11111');
//! 逻辑非,如果结果为true则返回false,两个!!双重否定,将字符串转化为布尔值
while (!!$file = readdir($dir)) {
    echo $file.'<br />';
}
closedir($dir);
?>