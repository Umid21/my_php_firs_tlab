<!DOCTYPE HTML>
<html>
<head>
<title>zad2</title>
<style>
	table{border:2px grey ridge;background-color:yellow;}
	td{border:2px grey ridge;}
</style>
</head>
<body>
<table>
 <tr>
  <td>"12abc"+1</td>
  <td><?php
  echo ("12abc"+1);
  ?></td>
 </tr>
 <tr>
  <td>"-12abc"+3</td>
  <td><?php
  echo ("-12abc"+3);
  ?></td>
 </tr>
 <tr>
  <td>"-12.1"+3 </td>
  <td><?php
  echo ("-12.1"+3);
  ?></td>
 </tr>
 <tr>
  <td>"-12.1abc"+3</td>
  <td><?php
  echo ("-12.1abc"+3);
  ?></td>
 </tr>
</table>
<br>
<?php
$v1="12abc"+1;
$v2= "-12abc"+3;
$v3="-12.1"+3;
$v4="-12.1abc"+3;
$txt=<<<AAA
<table>
 <tr>
  <td>"12abc"+1</td>
  <td>$v1</td>
 </tr>
 <tr>
  <td>"-12abc"+3</td>
  <td>$v2</td>
 </tr>
 <tr>
  <td>"-12.1"+3</td>
  <td>$v3</td>
 </tr>
 <tr>
  <td>"-12.1abc"+3</td>
  <td>$v4</td>
 </tr>
</table>
AAA;
echo $txt;
?>
</body>
</html>