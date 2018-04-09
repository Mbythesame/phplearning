<?php
/*
echo htmlentities('<strong>我是吴祁！</strong>').'<br/>'; //转换所有字符
echo htmlspecialchars('<strong>我是吴祁！</strong>') .'<br/>';//转换特殊字符
echo strip_tags('<strong>我是吴祁！</strong>').'<br/>' //去掉了<strong>
*/
//echo addslashes('This is \a" Teacher! ');//将单双引号反斜杠前加上个slash即斜杠,用stripslashes可以取消即跳过(strip)斜杠
//echo str_pad('Salad',15,' may ').'is good enough.';//填充字符串
//$email = 'yc60.com@gmail.com';
//$email_array = explode('@',$email);//将字符串内容切割并且转换为数组,切割标志位@.可用implode()或者join()合并
//print_r($email_array);

/*$string = "This is\tan example\nstring";
 使用制表符和换行符作为分界符 
$tok = strtok($string, " \n\t");

while ($tok !== false) {
    echo "Word=$tok<br />";
    $tok = strtok(" \n\t");
}
*/
//echo substr("abcdef", 1, 3);//从0开始数所以是bcd
//print_r(str_split('This is a Teacher!'));//将字符串拆分成数组,元素为字符串中每个字符
//echo strrev('This is a Teacher!');//逆转字符串内容
?>