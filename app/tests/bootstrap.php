<?php

/*
 * Test bootstrapper. This leaves out all stuff registering services and
 * related to request dispatching.
 */

if(is_dir(__DIR__.'/../../../../../vendor/'))
{
    require_once __DIR__.'/../../../../autoload.php';
}
else
{
    require_once __DIR__.'/../../vendor/autoload.php';
}
