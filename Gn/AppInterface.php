<?php

namespace Gn;

use Symfony\Component\HttpFoundation\Request;

/**
 * AppInterface
 */
interface AppInterface
{

    public function handle(Request $request);
}
