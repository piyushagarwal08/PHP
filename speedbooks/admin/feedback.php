<?php
extract($_REQUEST);
if(isset($Submit))
{
	echo $name;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $mobile;
	echo "<br>";
	echo $add;
	echo "<br>";
	echo $feedback;
	echo "<br>";
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
  <table width="500" border="1">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Name</td>
      <td><label>
        <input type="text" name="name" />
      </label></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label>
      <input type="text" name="email" />
      </label></td>
    </tr>
    <tr>
      <td>Mobile</td>
      <td><label>
      <input type="text" name="mobile" />
      </label></td>
    </tr>
    <tr>
      <td>Add</td>
      <td><label>
      <input type="text" name="add" />
      </label></td>
    </tr>
    <tr>
      <td>Feedback</td>
      <td><label>
        <textarea name="feedback"></textarea>
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
