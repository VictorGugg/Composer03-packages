<?php
require './vendor/autoload.php';

use CowSay\Cow;

$marguerite = new Cow('Hello, Wild Farm !');
$marguerite->setEyes('oO')
    ->setTongue('U');
    
echo $marguerite;