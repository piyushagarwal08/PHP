<?php
session_start();
$n=rand(111111,999999);
$_SESSION['cap']=$n;
//echo $n;
$x=100;
$y=40;
$f=14;
$img=imagecreate($x,$y);
header("content-type: image/jpeg");
imagecolorallocate($img,0,0,0);
$wh=imagecolorallocate($img,255,255,255);
imagestring($img,$f,30,5,$n,$wh);
imagejpeg($img,null,25);


?>




