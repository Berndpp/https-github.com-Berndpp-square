<?php
// NEXT FEATURES: THE OVAL THING KNOWING WHERE THE NEW DOT IS, THE NEW DOT JUST ALLOWED TO BE AT 50 PIXELS AROUND THE LAST ONE
// create an array
$my_array=array(1,1); // is fix by now - will be the coordinates of the last site load
//header("Refresh:5");
session_start();
// put the array in a session variable
$_SESSION['coordinates']=$my_array;
$image = imagecreatetruecolor(1300, 500);

// THE CREATED LINE (dot generated) and the THE ELLIPSE
			$coordinates = $_SESSION["coordinates"];
			$value1 = array_values($coordinates)[0];
			$value2 = array_values($coordinates)[1];
			$colorOfTheLineHistory = imagecolorallocate($image, 235, 113, 52);
			imagesetpixel($image, $value1, $value2, $colorOfTheLineHistory);

			$coordinatePoint1 = rand(0, 1200);
			$coordinatePoint2 = rand(0, 500);
			$colorOfTheLine = imagecolorallocate($image, 172, 255, 0);
           	imagesetpixel($image, $coordinatePoint1, $coordinatePoint2, $colorOfTheLine);
			
			$bg = imagecolorallocate($image, 43, 23, 48);
			imagefill($image, 0, 0, $bg);
			$col_ellipse = imagecolorallocate($image, 255, 255, 255);
			$str1 = rand(200, 500);
			$str2 = rand(200, 500);
			imageellipse($image, $str1, $str2, 300, 200, $col_ellipse);
			
			header("Content-type: image/png");
			imagepng($image);

$array2 = array($str1, $str2);
$my_array = $array2; // first approach of giving the coordinates to the next load
$_SESSION["coordinates"]=$array2;
?>
