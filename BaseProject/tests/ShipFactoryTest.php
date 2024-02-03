<?php declare(strict_types=1);

namespace Ship;


use App\Ship\HeroShip;
use PHPUnit\Framework\TestCase;
use App\Ship\Factory\DirectorShipFactory;

final class ShipFactoryTest extends TestCase {

    public function testTapU(){

        $hero = new HeroShip(200);

        $dFactory = new DirectorShipFactory("U");
        $factory = $dFactory->createFactory();
        $boat = $factory->createBoat();
        $this->assertSame(170, $boat->sendDamage($hero));
    }
    public function testTapR(){

        $hero = new HeroShip(200);

        $dFactory = new DirectorShipFactory("R");
        $factory = $dFactory->createFactory();
        $boat = $factory->createBoat();
        $this->assertSame(180, $boat->sendDamage($hero));
    }
    public function testTapE(){

        $hero = new HeroShip(200);

        $dFactory = new DirectorShipFactory("E");
        $factory = $dFactory->createFactory();
        $boat = $factory->createBoat();
        $this->assertSame(190, $boat->sendDamage($hero));
    }
    public function testTapB(){

        $hero = new HeroShip(200);

        $dFactory = new DirectorShipFactory("B");
        $factory = $dFactory->createFactory();
        $boat = $factory->createBoat();
        $this->assertSame(160, $boat->sendDamage($hero));
    }
}