<?
session_start();
header('Content-type: image/png');
$visitor = exec("python ../image.py 'SashaStub'");
$new_message1 = str_replace("visitor",$visitor, 'Hello, visitor!');
$new_message2 = str_replace("visitor",$visitor, 'Welcome to my page and have a nice day!');
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
$width  = (11 * strlen($longer_message));
$im = imagecreatetruecolor ($width,66);
$background = imagecolorallocate($im, 247, 247, 247);
imagefill($im,0,0,$background);
$color = imagecolorallocate($im, 64, 64, 64);
imagettftext($im, 13, 0, 141, 20, $color, $font, $new_message1);
imagettftext($im, 13, 0, 27, 50, $color, $font, $new_message2);
imagepng($im);
imagedestroy($im);
?>