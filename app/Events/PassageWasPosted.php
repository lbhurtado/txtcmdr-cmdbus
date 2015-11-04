<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/27/15
 * Time: 21:35
 */

namespace App\Events;

use App\Classes\Passage;
use Illuminate\Queue\SerializesModels;

class PassageWasPosted extends Event
{
    use SerializesModels;

    public $passage;

    /**
     * PassageWasPosted constructor.
     * @param $otp
     */
    public function __construct(Passage $passage)
    {
        $this->passage = $passage;
    }
}