<?php

namespace PCBuilder;

use App\PCBuilder\Hardware\Cpu;
use App\PCBuilder\Hardware\Gpu;
use App\PCBuilder\Hardware\Hdd;
use App\PCBuilder\Hardware\MotherBoard;
use App\PCBuilder\Hardware\Ram;
use App\PCBuilder\Hardware\Ssd;
use App\PCBuilder\Interfaces\ComputerInterface;
use App\PCBuilder\Interfaces\MasterInterface;
use PHPUnit\Framework\TestCase as FrameworkTestCase;
use App\PCBuilder\Master;
use App\PCBuilder\PCBuilder;
use App\PCBuilder\Order;
use App\PCBuilder\Desktop;

class PCBuilderTest extends FrameworkTestCase
{
    /**
     * @var MasterInterface
     */
    private MasterInterface $master;

    /**
     * @var ComputerInterface
     */
    private ComputerInterface $desktop;

    protected function setUp(): void
    {
        $this->master = new Master();
        $this->master->setBuilder(new PCBuilder());
        $this->master->getBuilder()
            ->setPart(new Motherboard(Order::MB))
            ->setPart(new Cpu(Order::CPU))
            ->setPart(new Ram(Order::RAM))
            ->setPart(new Gpu(Order::GPU))
            ->setPart(new Ssd(Order::SSD))
            ->setPart(new Hdd(Order::HDD));

        $this->desktop = $this->master->build();
    }

    public function testInstance()
    {
        $this->assertInstanceOf(ComputerInterface::class, $this->desktop);
    }

    public function testParts()                                     
    {
        $this->assertEquals(Order::MB, $this->desktop->getComponent(MotherBoard::class)->getValue());
        $this->assertEquals(Order::CPU, $this->desktop->getComponent(Cpu::class)->getValue());
        $this->assertEquals(Order::RAM, $this->desktop->getComponent(Ram::class)->getValue());
        $this->assertEquals(Order::GPU, $this->desktop->getComponent(Gpu::class)->getValue());
        $this->assertEquals(Order::SSD, $this->desktop->getComponent(Ssd::class)->getValue());
        $this->assertEquals(Order::HDD, $this->desktop->getComponent(Hdd::class)->getValue());
    }                                                                            
}