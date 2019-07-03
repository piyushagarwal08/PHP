<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$a=array(x=>10,y=>20,z=>30);
//echo $a["z"];
foreach($a as $k=>$v)
{
	echo "key is $k and value is $v";
	echo "<br>";

}


?>
</body>
</html>
