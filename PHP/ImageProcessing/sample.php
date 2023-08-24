<?php
$sourceImagePath = "source.jpg";
$destinationImagePath = "destination.jpg";

list($width,$height) = getimagesize($sourceImagePath);
$newWidth = 200;
$newHeight = ($newWidth/$width) * $height;

$newImage = imagecreatetruecolor($newWidth,$newHeight);
$sourceImage = imagecreatefromjpeg($sourceImagePath);
imagecopyresized($newImage,$sourceImage,0,0,0,0,$newWidth,$newHeight, $width, $height);

imagejpeg($newImage, $destinationImagePath, 90);
imagedestroy($newImage);
imagedestroy($sourceImage);
echo "<img src='$destinationImagePath' alt='Resized Image'>";



?>