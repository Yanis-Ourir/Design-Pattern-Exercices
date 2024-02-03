<?php 

namespace App\Shape\Factory;

use App\Shape\Exceptions\ShapeUnknowException;
use App\Shape\Interfaces\ShapeInterface;


class ShapeFactory {

	public static function build($shape) : ShapeInterface
	{
		$entity = "App\\Shape\\" . ucfirst(strtolower($shape));
        if(!class_exists($entity)) {
            throw new ShapeUnknowException('Shape unknown', 404);
        }
        return new $entity;
	}
}