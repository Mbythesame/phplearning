<?php
//echo mktime(14,14,14,11,11,2007).'</br>';
//echo date('Y-m-d H:i:s',mktime(14,14,14,11,11,2007));
date_default_timezone_set('Asia/Shanghai');//test result:2018-04-17 19:15:42;real date:2018-04-10 19:15:42
echo date('Y-m-d H:i:s',time())//+(7*24*60*60))//which result in problem in line 4;

?>