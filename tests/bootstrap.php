<?php

/**
 * $loader is in global scope, it's easy to debug classes inside classes.
 */

// Project can be a root project, also a child project (lives under root's vendor)
$locations[] = __DIR__ . "/../vendor/autoload.php";
$locations[] = __DIR__ . "/../../../autoload.php";

foreach ($locations as $location) {
    if (is_file($location)) {
        $loader = require $location;
        $loader->addPsr4('AndyTruong\\Uuid\\', __DIR__.'/../src');
        break;
    }
}
