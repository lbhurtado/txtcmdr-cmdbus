<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/23/15
 * Time: 11:38
 */

namespace App\Http\Controllers;

use App\Commands\GenerateOTPCommand;
use App\Commands\ConfirmPINCommand;
use App\Commands\LoadMobileCommand;
use App\Commands\PostPassageCommand;

use Parse\ParseObject;
use Parse\ParseUser;
use Parse\ParseQuery;
use Parse\ParseCloud;
use Parse\ParseACL;
use Parse\ParseException;

class TextCommanderController extends Controller
{
    public function challenge($origin, $mobile)
    {
        $command = new GenerateOTPCommand($origin, $mobile);

        $this->commandBus->execute($command);
    }

    public function confirm($origin, $mobile, $pin)
    {
        $command = new ConfirmPINCommand($origin, $mobile, $pin);

        $this->commandBus->execute($command);
    }

    public function load($origin, $mobile, $amount)
    {
        $command = new LoadMobileCommand($origin, $mobile, $amount);

        $this->commandBus->execute($command);
    }

    public function read($origin, $destination, $passage)
    {
        $command = new PostPassageCommand($origin, $destination, $passage);

        $this->commandBus->execute($command);
    }

    public function cloudUsers() {
        $query = ParseUser::query();
        $results = $query->find(true);
        echo "Successfully retrieved " . count($results) . " users.\n";
        for ($i = 0; $i < count($results); $i++) {
            $object = $results[$i];
            echo $object->getObjectId() . ' - ' . $object->get('username') . "\n";
        }
    }
}