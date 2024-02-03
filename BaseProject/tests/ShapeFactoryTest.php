<?php declare(strict_types=1);

namespace Shape;

use App\Shape\Exceptions\ShapeUnknowException;
use App\Shape\Factory\ShapeFactory;
use App\Shape\Circle;
use PHPUnit\Framework\TestCase;

final class ShapeFactoryTest extends TestCase {
	
	public function testThatFactoryIsWorking()
	{
		$circle = ShapeFactory::build('circle');
		$this->assertInstanceOf(Circle::class, $circle);
	}

	public function testThatShapeUnknownExceptionIsThrown()
	{
		$this->expectException(ShapeUnknowException::class);
		$star = ShapeFactory::build('star');
		$star->draw();
	}
}
