<?php
/**
 * Created by PhpStorm.
 * User: lbhurtado
 * Date: 9/23/15
 * Time: 11:59
 */

namespace Acme\Jobs;


class PostJobListingCommand
{
    public $title;

    public $description;

    /**
     * PostJobListingCommand constructor.
     * @param $title
     * @param $description
     */
    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }


}