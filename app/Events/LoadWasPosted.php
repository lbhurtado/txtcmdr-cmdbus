<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/27/15
 * Time: 21:35
 */

namespace App\Events;

use App\Classes\Load;
use Illuminate\Queue\SerializesModels;

class LoadWasPosted extends Event
{
    use SerializesModels;

    public $load;

    /**
     * OTPWasCreated constructor.
     * @param $otp
     */
    public function __construct(Load $load)
    {
        $this->load = $load;
    }

    //use a trait or create a super parent class to encapsulate the sms capability
    //this is just quick and dirty.
    //LoadWasPosted has to be a different class from SMSNotifier
}