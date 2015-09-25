<?php

namespace App\Http\Controllers;

use Acme\Commanding\ValidationCommandBus;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    protected $request;

    protected $commandBus;

    public function __construct(ValidationCommandBus $commandBus, Request $request)
    {
        $this->commandBus = $commandBus;
        $this->request = $request;
    }
}
