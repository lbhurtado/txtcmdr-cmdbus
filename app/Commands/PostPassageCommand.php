<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 04/11/15
 * Time: 10:30
 */

namespace App\Commands;


class PostPassageCommand
{
    public $origin;

    public $destination;

    public $passage;

    /**
     * PostPassageCommand constructor.
     * @param $destination
     * @param $origin
     * @param $passage
     */
    public function __construct($origin, $destination, $passage)
    {
        $this->origin = $origin;
        $this->destination = $destination;
        $this->passage = $passage;
    }
}