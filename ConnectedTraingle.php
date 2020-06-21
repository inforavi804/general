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
     
imagepolygon($image, $valuesTr1, 3, $image_color);

imagepolygon($image, $valuesTr2, 3, $image_color);

imagepolygon($image, $valuesTr3, 3, $image_color); 



imageline($image, 205, 100, 105, 205, $image_color);

imageline($image, 245, 100, 340, 210, $image_color);

imageline($image, 125, 245, 325, 245, $image_color);


header('Content-type: image/png');      
imagepng($image);

?>