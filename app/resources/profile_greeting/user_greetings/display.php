<?
session_start();
header('Content-type: image/png');
<<<<<<< HEAD
$visitor = 'xShellekx';
$new_message1 = str_replace('visitor', $visitor, 'Hey visitor!');
$new_message2 = str_replace('visitor', $visitor, 'Welcome to Foxytales!');

$text_box1 = imagettfbbox(22, 0, '../uploaded_fonts/comingsoon.ttf', $new_message1);
$text_width1 = $text_box1[2] - $text_box1[0];
$full_width1 = $text_width1 + (20 * 2);

$text_box2 = imagettfbbox(22, 0, '../uploaded_fonts/comingsoon.ttf', $new_message2);
=======
$visitor = 'Ammerlie';
$new_message1 = str_replace('visitor', $visitor, 'Hey visitor!');
$new_message2 = str_replace('visitor', $visitor, 'Welcome to my page!');

$text_box1 = imagettfbbox(15, 0, '../uploaded_fonts/arberkley.ttf', $new_message1);
$text_width1 = $text_box1[2] - $text_box1[0];
$full_width1 = $text_width1 + (20 * 2);

$text_box2 = imagettfbbox(15, 0, '../uploaded_fonts/arberkley.ttf', $new_message2);
>>>>>>> f2550f67cad2c889a90371153e341f545e333049
$text_width2 = $text_box2[2] - $text_box2[0];
$full_width2 = $text_width2 + (20 * 2);

$text_height = $text_box2[1] - $text_box2[5];

if ($full_width1 >= $full_width2) {
    $width = $full_width1;
    $x1 = 20;
    $x2 = ($width - $text_width2)/2;
} else {
    $width = $full_width2;
    $x2 = 20;
    $x1 = ($width - $text_width1) / 2;
}

<<<<<<< HEAD
$y1 = 20 + 22;
$y2 = $y1 + 10 + $text_height;
$height = $y2 + 20 + 22/2;
=======
$y1 = 20 + 15;
$y2 = $y1 + 10 + $text_height;
$height = $y2 + 20 + 15/2;
>>>>>>> f2550f67cad2c889a90371153e341f545e333049

$im = imagecreatetruecolor ($width, $height);
imagealphablending($im, true);
imagesavealpha($im, true);
<<<<<<< HEAD
$background = imagecolorallocate($im, 230, 9, 86);
imagefill($im,0,0,0x7fff0000);
$color = imagecolorallocate($im, 232, 9, 69);
imagettftext($im, 22, 0, $x1, $y1, $color, '../uploaded_fonts/comingsoon.ttf', $new_message1);
imagettftext($im, 22, 0, $x2, $y2, $color, '../uploaded_fonts/comingsoon.ttf', $new_message2);
=======
$background = imagecolorallocate($im, 0, 0, 0);
imagefill($im,0,0,$background);
$color = imagecolorallocate($im, 255, 255, 255);
imagettftext($im, 15, 0, $x1, $y1, $color, '../uploaded_fonts/arberkley.ttf', $new_message1);
imagettftext($im, 15, 0, $x2, $y2, $color, '../uploaded_fonts/arberkley.ttf', $new_message2);
>>>>>>> f2550f67cad2c889a90371153e341f545e333049
imagepng($im);
imagedestroy($im);
?>