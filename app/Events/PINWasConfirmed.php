<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/27/15
 * Time: 08:22
 */

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;

class PINWasConfirmed extends Event
{
    use SerializesModels;

    public $otp;

    /**
     * UserWasValidated constructor.
     * @param $pin
     */
    public function __construct($otp)
    {
        $this->otp = $otp;
    }


}