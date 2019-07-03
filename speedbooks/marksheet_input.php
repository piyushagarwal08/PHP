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
</head>

<body>
<form action="marks_output.php" method="post">
  <table width="500" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center" class="style1">Marksheet Input Form </div></td>
    </tr>
    <tr>
      <td>Name</td>
      <td><label>
        <select name="name">
          <option>--Select Any One---</option>
          <option>Sanjay</option>
		  <option>Ravi</option>
		  <option>Sam</option>
		  <option>Chavi</option>
		
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Hindi</td>
      <td><label>
      <input type="text" name="hindi" />
      </label></td>
    </tr>
    <tr>
      <td>English</td>
      <td><label>
      <input type="text" name="english" />
      </label></td>
    </tr>
    <tr>
      <td>Maths</td>
      <td><label>
      <input type="text" name="maths" />
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
