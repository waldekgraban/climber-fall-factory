<?php

namespace Waldekgraban\ClimberFallFactory\Tests\Unit;

use Waldekgraban\ClimberFallFactory\Tests\TestCase;
use Waldekgraban\ClimberFallFactory\Downfall\Downfall;

class DownfallTest extends TestCase
{
    public function testCanInitializeByConstructor()
    {
        $climberFallsHeight = 4;
        $downfall = new Downfall($climberFallsHeight);

        $this->assertInstanceOf(Downfall::class, $downfall);
    }

    public function testDownfallsHeightIsNumbers()
    {
        $climberFallsHeight = 4;
        $downfallHeight = new Downfall($climberFallsHeight);

        $this->assertIsInt($downfallHeight->getFallsHeight());
    }
}
