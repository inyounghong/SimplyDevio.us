<?
header('Content-type: image/png');
include('../php/VisitorScraper.php');
$visitorScraper = new VisitorScraper("s-a-r-c", false);
$visitor = $visitorScraper->getVisitor();
$new_message1 = str_replace('visitor', $visitor, 'visitor');
$new_message2 = str_replace('visitor', $visitor, 'Glad to see you!');

$text_box1 = imagettfbbox(27, 0, '../uploaded_fonts/georgia.ttf', $new_message1);
$text_width1 = $text_box1[2] - $text_box1[0];
$full_width1 = $text_width1 + (17 * 2);

$text_box2 = imagettfbbox(27, 0, '../uploaded_fonts/georgia.ttf', $new_message2);
$text_width2 = $text_box2[2] - $text_box2[0];
$full_width2 = $text_width2 + (17 * 2);

$text_height = $text_box2[1] - $text_box2[5];

if ($full_width1 >= $full_width2) {
    $width = $full_width1;
    $x1 = 17;
    $x2 = ($width - $text_width2)/2;
} else {
    $width = $full_width2;
    $x2 = 17;
    $x1 = ($width - $text_width1) / 2;
}

$y1 = 20 + 27;
$y2 = $y1 + 0 + $text_height;
$height = $y2 + 20 + 27/2;

$im = imagecreatetruecolor ($width, $height);
imagealphablending($im, true);
imagesavealpha($im, true);
$background = imagecolorallocate($im, 0, 0, 0);
imagefill($im,0,0,0x7fff0000);
$color = imagecolorallocate($im, 41, 34, 34);
imagettftext($im, 27, 0, $x1, $y1, $color, '../uploaded_fonts/georgia.ttf', $new_message1);
imagettftext($im, 27, 0, $x2, $y2, $color, '../uploaded_fonts/georgia.ttf', $new_message2);
imagepng($im);
imagedestroy($im);
?>