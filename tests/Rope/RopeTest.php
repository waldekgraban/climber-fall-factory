<?php

namespace Waldekgraban\ClimberFallFactory\Tests\Unit;

use Waldekgraban\ClimberFallFactory\Tests\TestCase;
use Waldekgraban\ClimberFallFactory\Rope\Rope;

class RopeTest extends TestCase
{
    public function testCanInitializeByConstructor()
    {
        $length = 4;
        $rope = new Rope($length);

        $this->assertInstanceOf(Rope::class, $rope);
    }

    public function testRopesLengthIsNumber()
    {
        $length = 4;
        $rope = new Rope($length);

        $this->assertIsInt($rope->getRopeLength());
    }
}
