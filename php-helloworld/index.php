<?php
//Create a bluegreen deployment demo 
$in = imagecreatetruecolor(200, 200);
$white = imagecolorallocate($in, 255, 255, 255);
$blue = imagecolorallocate($in, 0, 0, 255);
$green = imagecolorallocate($in, 0 , 255, 0);

// Draw a white rectangle 
// imagefilledrectangle($in, 0, 0, 199, 199, $blue);
// imagefilledrectangle($in, 0, 0, 199, 199, $green);

//Save the image 
header('Content-Type: image/png');
imagePNG($in, './imagefilledrectangle.png');
imagedestroy($in);
?>
