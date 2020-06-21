<?php

$valuesTr1 = array( 
		            225,  50,
		            200,  100,
		            250,  100
		        );

$valuesTr2 = array( 
		            100,  200,
		            75,  250,
		            125,  250
		        );

$valuesTr3 = array( 
		            350,  200,
		            325,  250,
		            375,  250
		        );
 
$image = imagecreatetruecolor(500, 500); 
     
$background_color = imagecolorallocate($image,  0, 100, 155); 
      
imagefill($image, 0, 0, $background_color);

$image_color = imagecolorallocate($image, 255, 255, 255); 
    
$image_color_dark = imagecolorallocate($image, 200, 200, 200); 

imageellipse($image, 50, 50, 20, 20, $image_color_dark);

imageellipse($image, 250, 50, 20, 20, $image_color_dark);


imageellipse($image, 70, 100, 18, 18, $image_color);

imageellipse($image, 230, 100, 18, 18, $image_color);


imageellipse($image, 150, 130, 18, 18, $image_color);


imageline($image, 60, 50, 240, 50, $image_color);


imageline($image, 55, 60, 65, 92, $image_color);

imageline($image, 245, 60, 235, 92, $image_color);


imageline($image, 80, 110, 140, 130, $image_color);

imageline($image, 230, 110, 160, 130, $image_color);


header('Content-type: image/png');      
imagepng($image);

?>