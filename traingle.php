<?php

$valuesHexagon = array( 
		            200,  100, 
		            400,  100, 
		            500,  250,
		            400,  400,
		            200,  400,
		            100,  250
		        );

$valuesSquare = array( 
					200,  250,
		            300,  150,
		            400,  250,
		            300,  350
		        );
 
$image = imagecreatetruecolor(600, 500); 
     
$background_color = imagecolorallocate($image,  0, 100, 155); 
      
imagefill($image, 0, 0, $background_color); 
    
$image_color = imagecolorallocate($image, 255, 255, 255); 
     
imagepolygon($image, $valuesHexagon, 6, $image_color); 

//imageellipse($image, 300, 250, 250, 250, $image_color);

//imagepolygon($image, $valuesSquare, 4, $image_color);

header('Content-type: image/png');      
imagepng($image);
?>