<?php

namespace Other;

/**
 * App
 */
class App
{

    public function handle($test)
    {
        die(var_dump('method: ' . __METHOD__. ' - file: ' . __FILE__. ' - line: ' . __LINE__)); //@todo remove
    }
}
