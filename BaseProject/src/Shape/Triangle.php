<?php 

namespace App\Shape;


use App\Shape\Interfaces\ShapeInterface;

class Triangle implements ShapeInterface
{
    public function draw()
    {
        $img = imagecreatetruecolor(400, 400);
        $bg = imagecolorallocate($img, 255, 255, 100);
        imagefill($img, 0, 0, $bg);
        $color_triangle = imagecolorallocate($img, 0, 0, 0);
        imagepolygon($img, [200, 100, 100, 300, 300, 300], 3, $color_triangle);
        imagepng($img, './triangle.png');
        imagedestroy($img);
    }
}