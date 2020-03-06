<?php
/*
 *
 * Created by Waldemar Graban 2019
 *
 */

namespace Waldekgraban\ClimberFallFactory\FallFactory;

class FallFactory
{
    protected $fallsHeight;
    protected $ropeLength;

    public function __construct($fallsHeight, $ropeLength)
    {
        $this->fallsHeight = $fallsHeight;
        $this->ropeLength  = $ropeLength;
    }

    public function getResult()
    {
        return $this->fallsHeight / $this->ropeLength;
    }
}
