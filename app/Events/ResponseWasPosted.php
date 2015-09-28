<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/28/15
 * Time: 19:12
 */

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use App\Classes\Response;

class ResponseWasPosted extends Event
{
    use SerializesModels;

    public $response;

    /**
     * AnswerWasPosted constructor.
     * @param $response
     */
    public function __construct(Response $response)
    {
        $this->response = $response;
    }
}