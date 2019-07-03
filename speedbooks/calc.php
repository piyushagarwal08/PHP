<?php
$v1=$_REQUEST['v1'];
$v2=$_REQUEST['v2'];
if(isset($_REQUEST['add']))
{
$o=$v1+$v2;
echo $o;

}
if(isset($_REQUEST['min']))
{
$o1=$v1-$v2;
echo $o1;

}
if(isset($_REQUEST['multi']))
{
$o2=$v1*$v2;
echo $o2;

}
if(isset($_REQUEST['div']))
{
$o3=$v1/$v2;
echo $o3;

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body>
<form action="" method="post" onsubmit="MM_validateForm('v1','','RisNum','v2','','RisNum');return document.MM_returnValue">
<table width="500" border="1">
  <tr>
    <td colspan="2"><div align="center">Clac</div></td>
    </tr>
  <tr>
    <td>Value V1 </td>
    <td><label>
      <input type="text" name="v1" />
    </label></td>
  </tr>
  <tr>
    <td>Value V2 </td>
    <td><label>
    <input type="text" name="v2" />
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" name="add" value="+" />
      <input type="submit" name="min" value="-" />
      <input type="submit" name="multi" value="*" />
      <input type="submit" name="div" value="/" />
    </label></td>
  </tr>
</table>



</form>
</body>
</html>
