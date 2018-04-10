<?php
/*
 * Unix 时间戳(Unix timestamp)，或称Unix 时间(Unix time)、POSIX 时
间(POSIX time)，是一种时间表示方式，定义为从格林威治时间1970 年01 月01 日00 时00
分00 秒起至现在的总秒数
 */
//print_r(getdate(1234567892));
/*$now = time();//计算时间差
$taxday = mktime(0,0,0,7,17,2018);
echo round(($taxday - $now)/60/60);
*/
function fntime() {
    list($msec, $sec) = explode(' ', microtime());
    return $msec+$sec;
}
$start_time = fntime();
for($i=0;$i<1000000;$i++) {
    //
}
$end_time = fntime();
echo round($end_time - $start_time,4);
?>