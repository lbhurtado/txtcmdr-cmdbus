<?php

namespace App\Http\Controllers;

use App\Classes\Commanding\ValidationCommandBus;
use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Parse\ParseClient;

class Controller extends BaseController
{
    protected $request;

    protected $commandBus;

    public function __construct(ValidationCommandBus $commandBus, Request $request)
    {
        $this->commandBus = $commandBus;

        $this->request = $request;

        ParseClient::initialize(
            'U6CaTTyJ2AGXWLdF3bfl89eWYR2BbMWrEE73Ynsd',
            'sz7rz1fuCIo4wRjNlM2lVrfuInsHbCRjr270tK8E',
            'vfUXDTVhAxvjteuuNq2in1fYrG7KKtdSMvchj1Qg'
        );
    }
}
