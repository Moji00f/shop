<?php

namespace Modules\categories\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function __invoke()
    {
        echo 'TestController';
    }
}
