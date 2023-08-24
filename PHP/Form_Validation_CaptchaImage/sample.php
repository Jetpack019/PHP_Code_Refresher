<?php
session_start();

$randomNumber = rand(1000,9999);
$_SESSION["captcha"] = $randomNumber;

$captchaImage = imagecreate(100,30);
$bgColor = imagecolorallocate($captchaImage,255,255,255);
$textColor = imagecolorallocate($captchaImage,0,0,0);

imagestring($captchaImage,5,25,8,$randomNumber,$textColor);
header("Content-type: image/png");



?>