<?php

require_once "vendor/autoload.php";

use Cocur\Slugify\Slugify;

$slugify = new Slugify();
$slugify->addRule("er", "lol");

echo $slugify->slugify("Guigas developer master? Entenda o cenário "); 

