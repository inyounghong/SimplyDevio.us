<?
session_start();
header('Content-type: image/png');
$visitor = exec("python ../image_with_name.py 'qaydoges'");
$new_message1 = str_replace("visitor",$visitor, 'heil satan');
$new_message2 = str_replace("visitor",$visitor, 'heil satan');
$font = './uploaded_fonts/' . 'Rock.TTF';
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
$width  = (10 * strlen($longer_message));
$im = imagecreatetruecolor ($width,50);
$background = imagecolorallocate($im, 0, 0, 0);
imagefill($im,0,0,$background);
$color = imagecolorallocate($im, 255, 255, 255);
imagettftext($im, 15, 0, 76, 67, $color, $font, $new_message1);
imagettftext($im, 15, 0, 65, 70, $color, $font, $new_message2);
imagepng($im);
imagedestroy($im);
?>