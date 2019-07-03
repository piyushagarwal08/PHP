<?php
$c=123456123456;
$p=1234;
$cardno=$_REQUEST['cno'];
$pin=$_REQUEST['pin'];
if(isset($_REQUEST['Submit']))
{
	if($c==$cardno && $p==$pin)
	{
		//echo "valid data";
		header("location: tranx.php");
		exit();
	
	}else
	{
		echo "invalid cardno/PIN";
	}

}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="javascript">
function valid()
{
	var n=/^[0-9]+$/;
	if(document.frm1.cno.value=="")
	{
	
		alert("please enter your card no.");
		document.frm1.cno.focus();
		return false;
	}else
	{
		if(document.frm1.cno.value.search(n)==-1)
		{
			alert("plz enter number values in cardno");
			document.frm1.cno.focus();
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
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Card No. </td>
      <td><label>
        <input type="text" name="cno" />
      </label></td>
    </tr>
    <tr>
      <td>PIN</td>
      <td><label>
      <input type="password" name="pin" />
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
