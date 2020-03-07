<?php

namespace Waldekgraban\ClimberFallFactory\Tests\Unit;

use Waldekgraban\ClimberFallFactory\Tests\TestCase;
use Waldekgraban\ClimberFallFactory\Downfall\Downfall;

class DownfallTest extends TestCase
{

    protected $downfall;

    protected function setUp(): void
    {
        $climberFallsHeight = 4;
        $this->downfall = new Downfall($climberFallsHeight);
    }

    public function testCanInitializeByConstructor()
    {
        $this->assertInstanceOf(Downfall::class, $this->downfall);
    }

    public function testDownfallsHeightIsNumbers()
    {
        $this->assertIsInt($this->downfall->getFallsHeight());
    }

    public function tearDown(): void
    {
        unset($this->downfall);
    }
}
