<?php declare(strict_types=1);

namespace Tests\Creational;

use App\Factory\ShapeFactory;
use App\Factory\shapes\Circle;
use App\Factory\shapes\Rectangle;
use App\Factory\shapes\Triangle;
use App\Exceptions\ShapeUnknownException;
use PHPUnit\Framework\TestCase;

final class ShapeFactoryTest extends TestCase {
	
	public function testThatFactoryIsWorking()
	{
		$circle = ShapeFactory::build('circle');
		$this->assertInstanceOf(Circle::class, $circle);
	}

	public function testThatShapeUnknownExceptionIsThrown()
	{
		$this->expectException(ShapeUnknownException::class);
		$star = ShapeFactory::build('star');
		$star->draw();
	}
}