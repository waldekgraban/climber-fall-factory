<?php
/*
 *
 * Created by Waldemar Graban 2019
 *
 */

namespace Waldekgraban\ClimberFallFactory;

require_once "../vendor/autoload.php";

use Waldekgraban\ClimberFallFactory\Downfall\Downfall;
use Waldekgraban\ClimberFallFactory\FallFactory\FallFactory;
use Waldekgraban\ClimberFallFactory\Rope\Rope;

//example of use

$climberFallsHeight = 4;
$ropeLength         = 10;

$fall        = new Downfall($climberFallsHeight);
$rope        = new Rope($ropeLength);
$fallFactory = new FallFactory($fall->getFallsHeight(), $rope->getRopeLength());

echo $fallFactory->getResult(); //show result
