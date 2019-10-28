<?php
/*
 *
 * Created by Waldemar Graban 2019
 *
 */

function getFallFactory(Downfall $myFall)
{
    $fall_factor = $testFall->getFallsHeight() / $testFall->getRopeLength();
    print $fall_factor;
}

class Downfall
{
    protected $climber_falls_height;
    protected $rope_length;

    public function __construct($climber_falls_height, $rope_length)
    {
        $this->falls_height = $climber_falls_height;
        $this->rope_length  = $rope_length;
    }

    public function getFallsHeight()
    {
        return $this->falls_height;
    }

    public function getRopeLength()
    {
        return $this->rope_length;
    }
}

$climber_falls_height = 4;
$rope_length          = 10;

$myFall = new Downfall($climber_falls_height, $rope_length);

return getFallFactory($myFall);
