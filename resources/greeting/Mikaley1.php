<?
session_start();
header('Content-type: image/png');
$visitor = exec("python ../image.py 'Mikaley'");
$new_message1 = str_replace("visitor",$visitor, 'Heya visitor, nice to see you here!');
$new_message2 = str_replace("visitor",$visitor, 'Glad you found me, stay if you like.');
$font = './uploaded_fonts/' . 'cambria.ttc';
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
$width  = (12 * strlen($longer_message));
$im = imagecreatetruecolor ($width,102);
$background = imagecolorallocate($im, 62, 62, 62);
imagefill($im,0,0,$background);
$color = imagecolorallocate($im, 238, 119, 39);
imagettftext($im, 18, 0, 45, 45, $color, $font, $new_message1);
imagettftext($im, 18, 0, 48, 77, $color, $font, $new_message2);
imagepng($im);
imagedestroy($im);
?>