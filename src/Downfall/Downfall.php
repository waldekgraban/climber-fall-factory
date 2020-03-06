<?php
/*
 *
 * Created by Waldemar Graban 2019
 *
 */

namespace Waldekgraban\ClimberFallFactory\Downfall;

class Downfall
{
    protected $climberFallsHeight;

    public function __construct($climberFallsHeight)
    {
        $this->falls_height = $climberFallsHeight;
    }

    public function getFallsHeight()
    {
        return $this->falls_height;
    }
}
