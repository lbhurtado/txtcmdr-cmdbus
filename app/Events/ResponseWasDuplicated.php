<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/29/15
 * Time: 08:02
 */

namespace App\Events;

use Illuminate\Queue\SerializesModels;

class ResponseWasDuplicated extends Event
{
    use SerializesModels;

    public $response;

    /**
     * ResponseWasDuplicated constructor.
     * @param $response
     */
    public function __construct($response)
    {
        $this->response = $response;
    }
}