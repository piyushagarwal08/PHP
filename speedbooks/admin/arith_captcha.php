<?php
session_start();
$n1=rand(1,4);
$n2=rand(1,4);
$txt=$n1."+".$n2;
//echo $txt;
$s=$n1+$n2;
$_SESSION['ca']=$s;
$x=100;
$y=30;
$f=14;
header("content-type: image/jpeg");
$img=imagecreate($x,$y);
imagecolorallocate($img,0,0,0);
$wh=imagecolorallocate($img,255,255,255);
imagestring($img,$f,20,6,$txt,$wh);
imagejpeg($img,null,25);



?>