<?php 

namespace App\Shape;



use App\Shape\Interfaces\ShapeInterface;

class Rectangle implements ShapeInterface
{

    #[\Override] public function draw()
    {
        $img = imagecreatetruecolor(400, 400);
        $bg = imagecolorallocate($img, 255, 255, 100);
        imagefill($img, 0, 0, $bg);
        $color_rectangle = imagecolorallocate($img, 0, 0, 0);
        imagerectangle($img, 100, 100, 300, 300, $color_rectangle);
        imagepng($img, './rectangle.png');
        imagedestroy($img);
    }
}