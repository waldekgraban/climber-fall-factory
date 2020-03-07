<?php

namespace Waldekgraban\ClimberFallFactory\Tests\Unit;

use Waldekgraban\ClimberFallFactory\FallFactory\FallFactory;
use Waldekgraban\ClimberFallFactory\Tests\TestCase;

class FallFactoryTest extends TestCase
{
    protected $fallFactory;

    protected function setUp(): void
    {
        $climberFallsHeight = 4;
        $ropeHeight         = 10;
        $this->fallFactory  = new FallFactory($climberFallsHeight, $ropeHeight);
    }

    public function testCanInitializeByConstructor()
    {
        $this->assertInstanceOf(FallFactory::class, $this->fallFactory);
    }

    public function testFallFactoryIsNumber()
    {
        $this->assertIsFloat($this->fallFactory->getResult());
    }

    protected function tearDown(): void
    {
        unset($this->fallFactory);
    }
}
