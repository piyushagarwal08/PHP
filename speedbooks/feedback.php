<?php
session_start();
require_once("admin/connection.php");
$n=$_REQUEST['name'];
$m=$_REQUEST['mobile'];
$e=$_REQUEST['email'];
$c=$_REQUEST['capd'];
if(isset($_REQUEST['Submit']))
{
	if($c==$_SESSION['c'])
	{
	$_SESSION['name']=$n;
	$_SESSION['mobile']=$m;
	$_SESSION['email']=$e;
	mysql_query("insert into feedback set name='".$n."',mobile='".$m."',email='".$e."',address='".$_REQUEST['address']."',feedback='".$_REQUEST['feedback']."'");
	echo "feedback successfully inserted";
	//header("location: feedback_output.php");
	//exit();
	}else
	{
		echo "invalid text";
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
	color: #0000FF;
	font-weight: bold;
}
-->
</style>
<script language="javascript">
function valid()
{
	var n=/^[0-9]+$/;
	var c=/^[a-zA-Z]+$/;
	var e=/^\w*\@\w*\.\w*$/;
	if(document.frm1.name.value=="")
	{
		alert("please enter name.");
		document.frm1.name.focus();
		return false;
	
	
	}else
	{
	
		if(document.frm1.name.value.search(c)==-1)
		{
			alert("plese enter chars in name.");
			document.frm1.name.focus();
			return false;
		
		}
	
	}


	if(document.frm1.mobile.value=="")
	{
		alert("please enter mobile no.");
		document.frm1.mobile.focus();
		return false;
	
	
	}else
	{
	
		if(document.frm1.mobile.value.search(n)==-1)
		{
			alert("plese enter valid mobile no.");
			document.frm1.mobile.focus();
			return false;
		
		}else
		{
			if(document.frm1.mobile.value.length!=10)
			{
		alert("please enter 10 digits mobile no.");
				document.frm1.mobile.focus();
				return false;			
			
			}
		
		}
	
	}
	if(document.frm1.email.value=="")
	{
		alert("please enter email");
		document.frm1.email.focus();
		return false;
	
	
	}else
	{
	
		if(document.frm1.email.value.search(e)==-1)
		{
			alert("plese enter valid email id");
			document.frm1.email.focus();
			return false;
		
		}
	
	}



}




</script>
</head>

<body>
<form action="" method="post" name="frm1" onsubmit="return valid()">
  <table width="500" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center" class="style1">Feedback</div></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><label>
        <input type="text" name="name"  />
      </label></td>
    </tr>
    <tr>
      <td>Mobile</td>
      <td><label>
      <input type="text" name="mobile"  maxlength="10" />
      </label></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label>
      <input type="text" name="email" />
      </label></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><label>
      <input type="text" name="address" />
      </label></td>
    </tr>
    <tr>
      <td>Feedback</td>
      <td><label>
        <textarea name="feedback"></textarea>
      </label></td>
    </tr>
    <tr>
      <td><p>Enter Here</p>
      <p>&nbsp;<img src="alpha_num_captcha.php" /> </p></td>
      <td><label>
        <input type="text" name="capd" />
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
