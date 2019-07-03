<?php
session_start();
$n1=rand(1,9);
$n2=rand(1,9);
$n3=rand(1,9);
$uc=array("A","B","C","D","R","T","H","K","L");
$lc=array("q","t","g","d","a","n","e","r","p");
$sc=array("!","@","#","$","%","&","?");
$txt=$uc[rand(0,8)].$n1.$lc[rand(0,8)].$n2.$sc[rand(0,6)].$n3;
$_SESSION['c']=$txt;
//echo $txt;
$x=100;
$y=40;
$f=14;
header("content-type: image/jpeg");
$img=imagecreate($x,$y);
imagecolorallocate($img,0,0,255);
$wh=imagecolorallocate($img,255,255,255);
imagestring($img,$f,20,6,$txt,$wh);
imagejpeg($img,null,25);


?>


