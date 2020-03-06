<?php

namespace Waldekgraban\ClimberFallFactory\Tests\Unit;

use Waldekgraban\ClimberFallFactory\Tests\TestCase;
use Waldekgraban\ClimberFallFactory\FallFactory\FallFactory;

class FallFactoryTest extends TestCase
{
    public function testCanInitializeByConstructor()
    {
        $climberFallsHeight = 4;
        $ropeHeight = 10;
        $fallFactory = new FallFactory($climberFallsHeight, $ropeHeight);

        $this->assertInstanceOf(FallFactory::class, $fallFactory);
    }

    public function testFallFactoryIsNumber()
    {
        $climberFallsHeight = 4;
        $ropeHeight = 10;
        $fallFactory = new FallFactory($climberFallsHeight, $ropeHeight);

        $this->assertIsFloat($fallFactory->getResult());
    }
}
