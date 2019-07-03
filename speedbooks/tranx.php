<?php
$a=10000;
$amt=$_REQUEST['amt'];
if(isset($_REQUEST['Submit']))
{
	if($amt<=$a)
	{
		$b=$a-$amt;
		$o= "your balance amt is $b";
		
	
	}else
	{
		$e= "insuff. fund";
	
	}

}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #009900;
	font-weight: bold;
}
.style2 {color: #FF0000}
-->
</style>
</head>

<body>
<form action="" method="post">
  <table width="500" border="0" align="center">
    <tr>
      <td colspan="2">&nbsp;
      <div align="center" class="style1"><?php echo $o?> <span class="style2"><?php echo $e?></span> </div></td>
    </tr>
    <tr>
      <td>Amout</td>
      <td><label>
        <input type="text" name="amt" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="Submit" />
      </label></td>
    </tr>
  </table>

</form>
</body>
</html>
