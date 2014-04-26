<?php

namespace Gn;

use Symfony\Component\HttpFoundation\Request;

/**
 * App
 */
class App implements AppInterface
{

    /**
     * @param Request $request
     */
    public function handle(Request $request)
    {
        die(var_dump('method: ' . __METHOD__. ' - file: ' . __FILE__. ' - line: ' . __LINE__)); //@todo remove
    }


}
