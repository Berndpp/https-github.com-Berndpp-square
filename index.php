<?php


// get the coordinates
//$str1 = var_dump(random_int(0, 1366));
//$str2 = var_dump(random_int(0, 768));

// Create a blank image.
$image = imagecreatetruecolor(1500, 700);

// Select the background color.
$bg = imagecolorallocate($image, 43, 23, 48);
// Fill the background with the color selected above.
imagefill($image, 0, 0, $bg);

$farbe_poly = imagecolorallocate($image, 255, 255, 255);

$str1 = rand(200, 900);
$str2 = rand(200, 900);

// Das Polygon zeichnen
imagepolygon($image, array(
        0,   0,
        100, 200,
        300, 200
    ),
    3,
    $farbe_poly);

// Choose a color for the ellipse.
$col_ellipse = imagecolorallocate($image, 255, 255, 255);
// Draw the ellipse.

imageellipse($image, $str1, $str2, 300, 200, $col_ellipse);


// Output the image.
header("Content-type: image/png");
imagepng($image);

//imageline(
//imagerectangle (
?>