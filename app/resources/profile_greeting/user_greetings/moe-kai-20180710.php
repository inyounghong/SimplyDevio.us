<?
header('Content-type: image/png');
include('../php/VisitorScraper.php');
$visitorScraper = new VisitorScraper("moe-kai", false);
$visitor = $visitorScraper->getVisitor();
$new_message1 = str_replace('visitor', $visitor, 'Welcome to my page, visitor!');
$new_message2 = str_replace('visitor', $visitor, 'Would you like a llama? Feel free to ask for one!');

$text_box1 = imagettfbbox(17, 0, '../uploaded_fonts/arial.ttf', $new_message1);
$text_width1 = $text_box1[2] - $text_box1[0];
$full_width1 = $text_width1 + (20 * 2);

$text_box2 = imagettfbbox(17, 0, '../uploaded_fonts/arial.ttf', $new_message2);
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

$y1 = 20 + 17;
$y2 = $y1 + 10 + $text_height;
$height = $y2 + 20 + 17/2;

$im = imagecreatetruecolor ($width, $height);
imagealphablending($im, true);
imagesavealpha($im, true);
$background = imagecolorallocate($im, 117, 47, 113);
imagefill($im,0,0,$background);
$color = imagecolorallocate($im, 0, 0, 0);
imagettftext($im, 17, 0, $x1, $y1, $color, '../uploaded_fonts/arial.ttf', $new_message1);
imagettftext($im, 17, 0, $x2, $y2, $color, '../uploaded_fonts/arial.ttf', $new_message2);
imagepng($im);
imagedestroy($im);
?>