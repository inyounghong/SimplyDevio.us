<?
session_start();
header('Content-type: image/png');
$visitor = exec("python ../image.py 'ChaoticLlamas'");
$new_message1 = str_replace("visitor",$visitor, 'Hi, visitor!');
$new_message2 = str_replace("visitor",$visitor, 'Welcome to my page!');
$font = './uploaded_fonts/' . 'ComingSoon.ttf';
# Determine the longer of the two  messages
if (strlen($new_message2) > 0)
{
    if (strlen($new_message1) <= strlen($new_message2))
    {
        $longer_message = $new_message2;
    }
    else
    {
        $longer_message = $new_message1;
    }
}
else
{
    $longer_message = $new_message1;
}
$width  = (50 * strlen($longer_message));
$im = imagecreatetruecolor ($width,200);
$background = imagecolorallocate($im, 130, 16, 16);
imagefill($im,0,0,$background);
$color = imagecolorallocate($im, 255, 255, 255);
imagettftext($im, 50, 0, 182, 99, $color, $font, $new_message1);
imagettftext($im, 50, 0, 96, 162, $color, $font, $new_message2);
imagepng($im);
imagedestroy($im);
?>