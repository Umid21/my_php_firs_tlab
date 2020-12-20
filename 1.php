<?php
print 'Using interpreter РНР '.phpversion();
$labNum = 1;
$str1 = <<<AAA
	<div  style='text-align:center;'><b>Laboratory work №$labNum</b></div>
AAA;
$str2 = <<<'AAA'
	<div  style='text-align:center;'><b>Laboratory work №$labNum</b></div>
AAA;
echo $str1;
echo $str2;
echo phpinfo();
?>