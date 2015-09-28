<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/29/15
 * Time: 07:21
 */

namespace App\Events;


use Illuminate\Queue\SerializesModels;

class ResponseWasUpdated extends Event
{
    use SerializesModels;

    public $response;

    /**
     * ResponseWasUpdated constructor.
     * @param $response
     */
    public function __construct($response)
    {
        $this->response = $response;
    }


}