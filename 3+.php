<!DOCTYPE HTML>
<html>
<head>
<title>zad3</title>
<style>
	table{border:2px grey ridge;background-color:yellow;}
	td{border:2px grey ridge;}
</style>
</head>
<body>
<?php
#var_dump($_REQUEST);
if(!empty($_GET['firstname'])){
	#echo 2;
	$str="Welcome, ".$_GET['firstname'];
	echo $str;
}else{
	?><form action="">
	<table>
	<tr>
	 <td>Enter your name</td>
	 <td><input name="firstname" type="text" required></input></td>
	</tr>
	<tr>
	 <td></td>
	 <td><input type="submit" value="Отправить"></input></td>
	</tr>
	</table>
	</form>
	<?php
}
?>
</body>
</html>