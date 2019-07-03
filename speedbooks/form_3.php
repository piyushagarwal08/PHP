<?php
$user=$_REQUEST['n'];
$pass=$_REQUEST['p'];
echo $user;
echo "<br>";
echo $pass;




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="get">
<table width="500" border="1">
  <tr>
    <td>Name</td>
    <td><label>
      <input type="text" name="n" />
    </label></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><label>
    <input type="password" name="p" />
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
