<?php
  
// Create an image from given image
$im = imagecreatefromjpeg(
'https://totallyhistory.com/wp-content/uploads/2011/06/Mona_Lisa1.jpg');
  
// find the size of image
$size = min(imagesx($im), imagesy($im));
  
// Set the crop image size 
$im2 = imagecrop($im, ['x' => 0, 'y' => 0, 'width' => 300, 'height' => 300]);
if ($im2 !== FALSE) {
    header("Content-type: image/png");
       imagepng($im2);
    imagedestroy($im2);
}
imagedestroy($im);
?>