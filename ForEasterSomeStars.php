<?php
header("Refresh:0.3");
$image = imagecreatetruecolor(1300, 500);

// THE EASTER EGG

// @ini_set("output_buffering", "Off");
// @ini_set('implicit_flush', 1);
// @ini_set('zlib.output_compression', 0);
// @ini_set('max_execution_time',1200);

// header( 'Content-type: text/html; charset=utf-8' );


// echo "a wave ";
// for ($i = 0; $i < 7000; $i++) {
				// echo "~";
    // if(sleep(3)!=0)
    // {
        // echo "sleep failed script terminating"; 
        // break;
    // }
    // flush();
    // ob_flush();
	
// }

// THE DRAWED LINE and the THE ELLIPSE

			// $coordinatePoint1 = rand(0, 1200);
			// $coordinatePoint2 = rand(0, 500);
			// $colorOfTheLine = imagecolorallocate($image, 172, 255, 0);
           	// imagesetpixel($image, $coordinatePoint1, $coordinatePoint2, $colorOfTheLine);
			
			// $bg = imagecolorallocate($image, 43, 23, 48);
			// imagefill($image, 0, 0, $bg);
			// $col_ellipse = imagecolorallocate($image, 255, 255, 255);
			// $str1 = rand(200, 500);
			// $str2 = rand(200, 500);
			// imageellipse($image, $str1, $str2, 300, 200, $col_ellipse);
			


    $a = 1200;
    $b = 500;
    $image = imagecreatetruecolor($a, $b);
//  for ($i = 0; $i <= 700000; ++$i) 
	
			$i = 0; 
        	while ($i <= 1800) 
		{         
			$coordinatePoint1 = rand(0, 1200);
			$coordinatePoint2 = rand(0, 500);
			$colorOfTheLine = imagecolorallocate($image, 172, 255, 0);
           	imagesetpixel($image, $coordinatePoint1, $coordinatePoint2, $colorOfTheLine);
			//usleep(3600);
			++$i;
		}
			header("Content-type: image/png");
			imagepng($image);
?>