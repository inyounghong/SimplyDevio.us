<?
session_start();
header('Content-type: image/png');

$visitor = exec("python ../image.py 'GlitterElixir'");
$new_message1 = str_replace("visitor",$visitor, 'Hello, pumpkin! Welcome to my page!');
$new_message2 = str_replace("visitor",$visitor, 'Please enjoy your stay!');
$font = './uploaded_fonts/' . 'BLKCHCRY.TTF';

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

$width  = (24 * strlen($longer_message));
$im = imagecreatetruecolor ($width,168);
$background = imagecolorallocate($im, 255, 133, 153);
imagefill($im,0,0,$background);

$color = imagecolorallocate($im, 255, 255, 255);

imagettftext($im, 25, 0, 122, 60, $color, $font, $new_message1);
imagettftext($im, 25, 0, 192, 110, $color, $font, $new_message2);

imagepng($im);
imagedestroy($im);

?>