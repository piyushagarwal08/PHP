<?php
$n=$_REQUEST['name'];
$h=$_REQUEST['hindi'];
$e=$_REQUEST['english'];
$m=$_REQUEST['maths'];
$t=$h+$e+$m;
$p=$t*100/300;
if($h<33)
{
	$hr="Fail";
}else
{
	$hr1="Pass";
}
if($e<33)
{
	$er="Fail";
}else
{
	$er1="Pass";
}
if($m<33)
{
	$mr="Fail";
}else
{
	$mr1="Pass";
}
if($e<33 || $h<33 || $m<33)
{
	$fr="Fail";

}else
{
	$fr1="Pass";
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
.style3 {
	color: #00CC00;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="500" border="1" align="center" background="images/imageasdasds.jpg">
  <tr>
    <td colspan="2"> &nbsp;&nbsp;&nbsp;<img src="images/Mono_20Create1_copy.png" width="127" height="131" /></td>
    <td colspan="2"><p>Name:<?php echo $n?></p>
    <p>Class:5A</p></td>
  </tr>
  <tr>
    <td width="99">Subject</td>
    <td width="116">Tot. Marks </td>
    <td width="135">Obt. Marks </td>
    <td width="132">Result</td>
  </tr>
  <tr>
    <td>Hindi</td>
    <td>100</td>
    <td><?php echo $h?>&nbsp;</td>
    <td><span class="style1"><?php echo $hr1?> <span class="style2"><?php echo $hr?></span> </span></td>
  </tr>
  <tr>
    <td>English</td>
    <td>100</td>
    <td><?php echo $e?>&nbsp;</td>
    <td><span class="style3"><?php echo $er1?></span> <span class="style2"><?php echo $er?></span> </td>
  </tr>
  <tr>
    <td>Maths</td>
    <td>100</td>
    <td><?php echo $m?>&nbsp;</td>
    <td><span class="style3"><?php echo $mr1?></span> <span class="style2"><?php echo $mr?></span> </td>
  </tr>
  <tr>
    <td>Total</td>
    <td>300</td>
    <td><?php echo $t?>&nbsp;</td>
    <td>%=<?php echo round($p,2)?></td>
  </tr>
  <tr>
    <td colspan="3"><div align="right">Final Result </div></td>
    <td> <span class="style3"><?php echo $fr1?> <span class="style2"><?php echo $fr?></span> </span></td>
  </tr>
</table>

</body>
</html>
