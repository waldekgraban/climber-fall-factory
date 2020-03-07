<?php

namespace Waldekgraban\ClimberFallFactory\Tests\Unit;

use Waldekgraban\ClimberFallFactory\Rope\Rope;
use Waldekgraban\ClimberFallFactory\Tests\TestCase;

class RopeTest extends TestCase
{
    protected $rope;

    protected function setUp(): void
    {
        $length     = 4;
        $this->rope = new Rope($length);
    }

    public function testCanInitializeByConstructor()
    {
        $this->assertInstanceOf(Rope::class, $this->rope);
    }

    public function testRopesLengthIsNumber()
    {
        $this->assertIsInt($this->rope->getRopeLength());
    }

    protected function tearDown(): void
    {
        unset($this->rope);
    }
}
