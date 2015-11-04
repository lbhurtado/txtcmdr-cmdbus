<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/26/15
 * Time: 21:34
 */

namespace App\Listeners;

use App\Events\OTPWasGenerated;
use App\Events\PINWasConfirmed;
use App\Events\LoadWasPosted;
use App\Events\PassageWasPosted;
use \Telerivet_API;

define('API_KEY', env('TELERIVET_API_KEY'));
define('PROJECT_ID', env('TELERIVET_PROJECT_ID'));
define('ELOAD_ID', env('TELERIVET_ELOAD_SERVICE_ID'));

class SMSNotifier extends Listener
{
    protected $api;

    protected $project;

    /**
     * SMSNotifier constructor.
     * @param $api
     * @param $project
     */
    public function __construct()
    {
        $this->api = new Telerivet_API(API_KEY);
        $this->project = $this->api->initProjectById(PROJECT_ID);
    }

    public function whenOTPWasGenerated(OTPWasGenerated $event)
    {
        $this->project->sendMessage(array(
            'to_number' => $event->otp->getMobile(),
            'content' => $event->otp->getRandomCode()
        ));
    }

    public function whenPINWasConfirmed(PINWasConfirmed $event)
    {
        $this->project->sendMessage(array(
            'to_number' => $event->otp->getOrigin(),
            'content' => "PIN was confirmed."
        ));

        $this->project->sendMessage(array(
            'to_number' => $event->otp->getMobile(),
            'content' => "PIN was confirmed from origin..."
        ));
    }

    public function whenPassageWasPosted(PassageWasPosted $event) {
        $content = app('App\Http\Controllers\BibleController')->getPassage($event->passage->passage);

        $content = json_decode($content->getContent());

        $this->project->sendMessage(array(
            'to_number' => $event->passage->destination,
            'content' => $content->data
        ));
    }
}