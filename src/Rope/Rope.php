<?php
/*
 *
 * Created by Waldemar Graban 2019
 *
 */

namespace Waldekgraban\ClimberFallFactory\Rope;

class Rope
{
    protected $rope_length;

    public function __construct($rope_length)
    {
        $this->length = $rope_length;
    }

    public function getRopeLength()
    {
        return $this->length;
    }
}
