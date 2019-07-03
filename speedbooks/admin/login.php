<?php
session_start();
include("connection.php");
$q=mysql_query("select * from login");
$a=mysql_fetch_array($q);
extract($_REQUEST);
if(isset($_COOKIE['user'])&& isset($_COOKIE['pass']))
{
	$cu=$_COOKIE['user'];
	$cp=$_COOKIE['pass'];

}
if(isset($Submit))
{
	if($cap==$_SESSION['ca'])
	{
		if($name==$a[1] && $password==$a[2])
		{
			if(isset($checkbox))
			{
	setcookie("user",$name,time()+1*24*60*60);
	setcookie("pass",$password,time()+1*24*60*60);
			
			}
		
			$_SESSION['name']=$name;
			header("location: inner.php");
			exit();
		
		}else
		{
			echo "invalid username/password";
		}
	
	}else
	{
		echo "invalid text";
	}
	
	
}
if(!empty($_GET['logout']))
{
	session_unset();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
  <table width="500" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>Login Form </strong></div></td>
    </tr>
    <tr>
      <td>User Name </td>
      <td><label>
        <input type="text" name="name" value="<?php echo $cu?>" />
      </label></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label>
        <input type="password" name="password" value="<?php echo $cp?>" />
      </label></td>
    </tr>
    <tr>
      <td><p>Enter Here</p>
      <p><img src="arith_captcha.php" />&nbsp; </p></td>
      <td><label>
        <input type="text" name="cap" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="Submit" />
      </label></td>
    </tr>
    <tr>
      <td><label>
        <input type="checkbox" name="checkbox" value="checkbox" />
      Remember Me </label></td>
      <td>Forget Password </td>
    </tr>
  </table>

</form>
</body>
</html>
